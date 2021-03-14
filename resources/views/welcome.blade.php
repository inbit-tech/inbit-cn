<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" lang="zh-CN">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
　　　　<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <title>壹贝</title>
    <link href="https://fonts.font.im/css?family=Economica|Passion+One" rel="stylesheet">

    <style>
      body {
        height: 100vh;
        width:  100%;
        display: flex;
        flex-direction: row;
        overflow: hidden;
      }

      .content-wrapper {
        width: 24%;
        height: 100vh;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
        padding-left: 6%;
      }

      .image-wrapper {
        width: 68%;
        height: 100vh;
        position: relative;
      }

      .logo-wrapper img {
        width: 80px;
        height: 80px;
      }

      .info-wrapper {
        margin-left: 4%;
        display: flex;
        flex-direction: column;
        align-items: left;
      }

      .site-title {
        font-family: 'Passion One', cursive;
        font-size: 1.6rem;
        color: #404041;
        letter-spacing: 1.1px;
      }

      .site-status {
        font-family: 'Economica', sans-serif;
        color: #404041;
      }

      .site-mail {
        text-decoration: none;
        margin-top: 4%;
        color: #404041;
      }

      .welcome-image {
        display: block;
        width: auto;
        height: auto;
        max-width: 1920px;
        max-height: 1280px;
        position: absolute;
        bottom: 0;
        right: -12%;
      }
    </style>
  </head>
  <body class="antialiased">
    <div class="content-wrapper">
      <div class="logo-wrapper">
        <img src="http://img.inbit.cn/inbit-cn/png/inbit-2021.png" alt="壹贝科技" class="inbit-logo">
      </div>
      <div class="info-wrapper">
        <div class="site-title">inBit</div>
        <div class="site-status">coming soon</div>
        <a href="mailto:hi@inbit.cn" class="site-mail">hi@inbit.cn</a>
      </div>
    </div>
    <div class="image-wrapper">
      <img src="http://img.inbit.cn/inbit-cn/png/welcome-phone.png" alt="小程序专家" class="welcome-image">
    </div>
  </body>
</html>
