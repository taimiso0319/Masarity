<?php

namespace App\Http\Controllers;

use App\Http\Utils\Validation\ImperialTakashiMembersRequest;
use App\Models\ImperialTakashiMember;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Object_;
use Thujohn\Twitter\Twitter;

class ImperialTakashiMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(ImperialTakashiMembersRequest $request)
    {
        //
        $response = null;
        $membersData = null;
        $twitterData = null;
        $steamData = null;
        $vrchatData = null;
        $twitterIds = [];
        $steamIds = [];
        // まだ使ってない。
        $vrchatIds = [];

        $imperialTakashiMemberModel = new ImperialTakashiMember();


        // id指定があればそれだけ取り出す。
        $id = $request->input('id');
        if( $id === null){
            $membersData = $imperialTakashiMemberModel->get();
        }else{
            $membersData = $imperialTakashiMemberModel->getRecords($id);
        }
        $response = $membersData;

        // メンバーデータから各種IDを抽出しておく。(IDを配列で渡したい場合があるので。)
        foreach ($membersData as $key => $membersDatum){
            $twitterIds[$key] = $membersDatum->twitterId; // nullが入るとTwitterAPI側ではスキップされる
            $steamIds[$key] = $membersDatum->steamId64;
        }

        // partにtwitterが含まれていればTwitterの情報を取得する。
        if(in_array( 'twitter', $request->input('part'),true)){
            $twitterController = new TwitterController();
            $twitterData = $twitterController->getUsersLookup($twitterIds);
        }
        // partにsteamが含まれていればSteamの情報を取得する。

        // partにvrchatが含まれていればVRChatの情報を取得する。

        for ($i = 0, $iMax = count($response); $i < $iMax; $i++){
            if($twitterData !== null){
                if($membersData[$i]-> twitterId === null){
                    // idが空だったらスキップ
                    continue;
                }
                $response[$i]->twitter = new \stdClass();
                $response[$i]->twitter->name = $twitterData[$i]->name;
                $response[$i]->twitter->screen_name = $twitterData[$i]->screen_name;
                $response[$i]->twitter->description = $twitterData[$i]->description;
                $response[$i]->twitter->profile_banner_url = property_exists($twitterData[$i],'profile_banner_url') ? $twitterData[$i]->profile_banner_url : null;
                $response[$i]->twitter->profile_image_url_https = $twitterData[$i]->profile_image_url_https;
            }
        }

        return response()->json($response,200,[],JSON_PRETTY_PRINT);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
