@extends('layouts.ifbook')


@section('main-content') {{--tive que user main-content ao inves de menu--}}


<style>
      body {
        font: 300 14px/18px Roboto;
        background-color: #251432;
       
      }
      *,
      :after,
      :before {
        box-sizing: border-box
      }

      .clearfix:after,
      .clearfix:before {
        content: '';
        display: table
      }

      .clearfix:after {
        clear: both;
        display: block
      }

      .muck-up {
        width: 95%;
        height: 100%;
        margin: 5em auto;
        position: relative;
        overflow: hidden;
      }

      .overlay {
        background: 
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
      }

      .overlay:after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        background: rgba(71, 32, 84, 0);
      }

      .muck-up > .top {
        position: relative;
        min-height: 240px;
        padding: 15px;
        color: #fff;
      }

      .top .nav span {
        float: left;
        display: block;
      }

      .nav p {
        margin-top: 2px;
        display: inline-block;
        float: left;
        vertical-align: bottom;
      }

      .ion-android-menu {
        font-size: 24px;
        margin-right: 17px;
      }

      .nav .ion-ios-more-outline {
        font-size: 38px;
        float: right !important;
      }

     

      .user-profile img {
        height: 45px;
        width: 45px;
        border-radius: 50%;
        float: left;
        margin-right: 24px;
      }

      .user-details p {
        font-size: 11px;
      }

      .user-details {
        float: left;
        margin-top: 5px;
        vertical-align: bottom;
      }

      .user-details h4 {
        font-size: 18px;
      }

      .filter-btn {
        position: absolute;
        z-index: 2;
        right: 15px;
        width: 40px;
        height: 40px;
        transition: all 0.4s ease-in-out 0s;
      }

      span.toggle-btn.ion-android-funnel:hover{
            cursor: pointer;
            background-color: red;
      }
      .filter-btn a {
        position: absolute;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        right: 25px;
        display: block;
        top: -46px;
        color: #fff;
        z-index: 99;
        font-size: 22px;
        transition: all .4s cubic-bezier(.68, 1, .265, 1)
      }

      .filter-btn:after {
        height: 170px;
        width: 170px;
        content: '"\f38b"';
        background-color: #FA396B;
        position: absolute;
        top: -110px;
        right: -40px;
        border-radius: 50%;
        transform: scale(0);
        transition: all 0.3s ease-in-out 0s;
      }

      .filter-btn.open span.toggle-btn.ion-android-funnel {
        background-color: #DE3963;
      }

      .filter-btn.open .ion-android-funnel:before {
        content: "\f2d7";
      }

      .open:after {
        transform: scale(1);
      }

      .filter-btn.open a:nth-child(1) {
        transform: translate(9px, -62px);
      }

      .filter-btn.open a:nth-child(2) {
        transform: translate(-50px, -34px);
      }

      .filter-btn.open a:nth-child(3) {
        transform: translate(-56px, 25px);
      }

      .filter-btn.open a:nth-child(4) {
        transform: translate(5px, 61px);
      }

      .muck-up .bottom {
        background-color: #fff;
        min-height: 303px;
        z-index: 1;
        padding: 35px;
        position: relative;
        color: #222;
        padding-top: 0px;
      }

      .bottom:after {
        content: '';
        position: absolute;
        top: -46px;
        background: #fff;
        left: -22px;
        right: 0;
        height: 100px;
        transform: rotate(10deg);
        width: 337px;
        z-index: -1;
      }

      .bottom .title {
        margin-bottom: 20px;
      }

      .bottom .title h3 {
        font-size: 22px;
        margin-bottom: 5px;
      }

      .title small {
        font-size: 10px;
        color: #888;
        text-transform: uppercase;
        letter-spacing: 1px;
      }

      ul.tasks .task-title {
        font-size: 13px;
        display: inline-block;
      }

      ul.tasks .task-time {
        float: right;
        font-size: 10px;
        color: #888;
      }

      ul.tasks .task-cat {
        font-size: 10px;
        display: block;
        color: #888;
      }

      ul.tasks li {
        margin-bottom: 16px;
        position: relative;
        z-index: 8;
      }

      ul.tasks li:after {
        content: '';
        position: absolute;
        left: -18px;
        top: 8px;
        height: 8px;
        width: 8px;
        border-radius: 50%;
      }

      ul.tasks li.red:after {
        background: #FF3163;
      }

      ul.tasks li.green:after {
        background: #54D6C7;
      }

      ul.tasks li.yellow:after {
        background: #EAB429;
      }

      ul.tasks::after {
        content: '';
        position: absolute;
        height: 400px;
        width: 1px;
        background: #eee;
        left: 20px;
        top: -68px;
      }

      ul li.hang {
        margin-bottom: 48px;
      }

      ul li.hang img {
        float: left;
        height: 20ox;
        width: 20px;
        border-radius: 50%;
        margin-right: 8px;
      }

</style>

  <div class="container">
    <div class="muck-up">
      <div class="overlay"></div>
      <div class="top">
        
        <div class="user-profile">
          <img src="https://raw.githubusercontent.com/arjunamgain/FilterMenu/master/images/profile.jpg">
          <div class="user-details">
            <h4> {{Auth::user()->name}}</h4>
            <p>Biografia</p>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="filter-btn">
      
        <button class="btn btn-outline-danger btn-lg"> <i class="bi bi-box-arrow-in-right"></i></button>
      
      </div>
      <div class="clearfix"></div>
      <div class="bottom">
        <div class="title">
          <h3>Notificações</h3>
          <small>Abril 26, 2021</small>
        </div>
        <ul class="tasks">
          <li class="one red">
            <span class="task-title">Você recebeu uma curtida</span>
            <span class="task-time">5pm</span>
            <span class="task-cat">Metch</span>

          </li>
          <li class="one red">
            <span class="task-title">Você recebeu um SuperLike</span>
            <span class="task-time">3pm</span>
            <span class="task-cat">Metch</span>

          </li>
          <li class="two green">
            <span class="task-title">Você recebeu cartas</span>
            <span class="task-time">2pm</span>
            <span class="task-cat">Nome da pessoa</span>

          </li>
          </li>
          <li class="tow green hang">
            <span class="task-title">Novas mensagens de grupo</span>
            <span class="task-time">2pm</span>
            <span class="task-cat">Nome do grupo</span>
            <img src="https://raw.githubusercontent.com/arjunamgain/FilterMenu/master/images/2.jpg">
            <img src="https://raw.githubusercontent.com/arjunamgain/FilterMenu/master/images/3.jpg">
            <img src="https://raw.githubusercontent.com/arjunamgain/FilterMenu/master/images/profile.jpg">
          </li>
          <li class="three yellow">
            <span class="task-title">Você recebeu uma solicitação de troca</span>
            <span class="task-time">2pm</span>
            <span class="task-cat">Perfil</span>
          </li>

          <li class="three yellow">
            <span class="task-title">Você atualizou os seus interesses</span>
            <span class="task-time">2pm</span>
            <span class="task-cat">Perfil</span>
          </li>
          <li class="three yellow">
            <span class="task-title">Alguém visualizou sua estante</span>
            <span class="task-time">2pm</span>
            <span class="task-cat">Library</span>
          </li>

        </ul>
      </div>
    </div>

  </div>



@endsection
