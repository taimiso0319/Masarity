<!--suppress SpellCheckingInspection -->
<template>
  <div class="nazu-body">
    <canvas />
    <div class="nazu-container">
      <div class="profile">
        <img src="https://yt3.ggpht.com/a/AATXAJx9rxoYV-0HhlyxAGf-4pYxmhkFUEfEY1Sktg=s288-c-k-c0xffffffff-no-rj-mo">
        <span>花芽なずな</span>
      </div>
      <div class="introduction">
        <div class="name"></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'NazunaChannel',
  data: function () {
    return {
      Dots   : [],
      ID     : 0,
      canvas : null,
      context: null,
      maximum: 100,
      colors : [
        '#FF9900',
        '#424242',
        '#BCBCBC',
        '#3299BB',
        '#B9D3B0',
        '#81BDA4',
        '#F88F79',
        '#F6AA93',
      ],
    }
  },
  mounted: function () {
    this.canvas  = $('canvas')[0]
    this.context =  this.canvas.getContext('2d')

    $(window).resize(function () {
      this.Dots = []
      this.WindowSize()
    })

    this.WindowSize()
    this.GenerateDots()
    this.Update()
  },
  methods: {
    /**
     * @return {string}
     */
    TrimHex: function (hex) {
      return (hex.charAt(0) === '#') ? hex.substring(1, 7) : hex
    },
    /**
     * @return {string}
     */
    HexToRGBA: function (hex, alpha) {
      const red   = parseInt((this.TrimHex(hex)).substring(0, 2), 16)
      const green = parseInt((this.TrimHex(hex)).substring(2, 4), 16)
      const blue  = parseInt((this.TrimHex(hex)).substring(4, 6), 16)

      return `rgba(${red}, ${green}, ${blue}, ${alpha})`
    },
    Dot: function (data) {
      this.active = true
      this.id     =  data.ID
      data.ID++

      this.diameter = 2 + Math.random() * 7

      this.x = Math.round(Math.random() * data.canvas.width)
      this.y = Math.round(Math.random() * data.canvas.height)

      this.velocity = {
        x: (Math.random() < 0.5 ? -1 : 1) * Math.random() * 0.4,
        y: (Math.random() < 0.5 ? -1 : 1) * Math.random() * 0.4,
      }

      this.alpha    = 0.1
      this.maxAlpha = this.diameter < 5 ? 0.3 : 0.8
      this.hex      =  data.colors[Math.round(Math.random() * 7)]
      this.color    = data.HexToRGBA(this.hex, this.alpha)
      this.Update   = function () {
        if (this.alpha <= this.maxAlpha) {
          this.alpha += 0.005
          this.color =  data.HexToRGBA(this.hex, this.alpha)
        }

        this.x += this.velocity.x
        this.y += this.velocity.y

        if (this.x > data.canvas.width + 5 || this.x < 0 - 5 || this.y > data.canvas.height + 5 || this.y < 0 - 5)
          this.active = false
      }

      this.Draw = function () {
        data.context.strokeStyle = this.color
        data.context.fillStyle   = this.color
        data.context.save()
        data.context.beginPath()
        data.context.translate(this.x, this.y)
        data.context.moveTo(0, -this.diameter)

        for (let i = 0; i < 7; i++) {
          data.context.rotate(Math.PI / 7)
          data.context.lineTo(0, -(this.diameter / 2))
          data.context.rotate(Math.PI / 7)
          data.context.lineTo(0, -this.diameter)
        }

        if (this.id % 2 === 0)
          data.context.stroke()
        else
          data.context.fill()

        data.context.closePath()
        data.context.restore()
      }
    },
    /**
     * @return {boolean}
     */
    GenerateDots: function () {
      if (this.Dots.length < this.maximum) {
        for (let i =  this.Dots.length; i < this.maximum; i++)
          this.Dots.push(new this.Dot(this))
      }
      return false
    },
    Update: function () {
      this.GenerateDots()
      this.Dots.forEach(
        function (Dot) {
          Dot.Update()
        },
      )

      this.Dots =  this.Dots.filter(function (Dot) {
        return Dot.active
      })

      this.Render()
      requestAnimationFrame(this.Update)
    },
    Render () {
      this.context.clearRect(0, 0, this.canvas.width, this.canvas.height)
      this.Dots.forEach(function (Dot) {
        Dot.Draw()
      })
    },
    WindowSize: function (width, height) {
      if (width != null) this.canvas.width = width; else this.canvas.width = window.innerWidth
      if (height != null) this.canvas.height = height; else this.canvas.height = window.innerHeight
    },
  },
}
</script>

<style scoped lang='scss'>
  @import url('https://fonts.googleapis.com/css?family=Oswald:300');

  div .nazu-body {
    background: url('http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/crossword.png');
    margin-left: -30px;
    margin-right: -30px;
    margin-top: -1.5rem;
    height: 100vw;
    overflow: hidden;
    position: relative;

    .nazu-container{
      height: 100%;
    .introduction {
      margin: auto;
      top:0;
      right: 0;
      left: 0;
      bottom: 0;
      text-align: center;
      .name {
        font-weight: 700;
        font-size: 24px;
        color: #6944ff;
        margin-bottom: 15px;
      }
    }
    }
  }

  canvas {
    position: absolute;
    -webkit-filter: blur(0.6px);
    -moz-filter: blur(0.6px);
    -o-filter: blur(0.6px);
    -ms-filter: blur(0.6px);
    filter: blur(0.6px);
  }
  .profile {
    position: absolute;
    margin-top: 4rem;
    margin-right: auto;
    margin-left: auto;
    margin-bottom: 25px;
    top: 0; right: 0; left: 0; bottom: 0;
    width: 120px; height: 120px;
    border-radius: 120px;
    text-align: center;
    cursor: pointer;
  }

  .profile img {
    border-radius: 120px;
    opacity: 0.9;
    width: 120px; height: 120px;
  }

  .profile:before {
    content: '';
    position: absolute;
    top: -6px; left: -6px;
    width: 130px; height: 130px;
    border-radius: 162px;
    border: 1px solid #BCBCBC;
  }

  .profile:after {
    content: '';
    position: absolute;
    top: -11px; left: -11px;
    width: 140px; height: 140px;
    border-radius: 172px;
    border: 1px dashed #81BDA4;
  }

  .profile span {
    position: absolute;
    margin: auto;
    top: 0; right: 0; left: 0; bottom: 0;
    width: 120px; height: 120px;
    border-radius: 120px;
    line-height: 120px;
    font-family: 'Oswald';
    font-size: 20px;
    visibility: hidden;
  }

  .profile:hover img {
    -webkit-filter: blur(2px);
    -moz-filter: blur(2px);
    -o-filter: blur(2px);
    -ms-filter: blur(2px);
    filter: blur(2px);
    opacity: 0.8;
  }

  .profile:hover span {
    background: rgba(217, 217, 217, 0.52);
    visibility: visible;
    color: #494E52;
  }
</style>
