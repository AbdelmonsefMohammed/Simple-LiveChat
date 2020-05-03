@extends('layouts.app')

@section('content')
<style>



.con {
height: 100%;
  display: flex;

}    
.alrazy-title {
  margin: auto;
  margin-top: 80px;
  font-family: 'Open Sans', Helvetica, sans-serif;
  font-weight: 700;
  font-size: 6vw;
  font-size: calc( 100vw / var(--char-total) );
  position: relative;
  padding: 0.4em 0;
  overflow: hidden;
  color: #FFF;
}
.alrazy-title:after {
  content: '';
  display: block;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  border-bottom: solid 0.2em;
  -webkit-animation: underline 1s cubic-bezier(0.8, 0, 0, 1);
          animation: underline 1s cubic-bezier(0.8, 0, 0, 1);
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
}
@-webkit-keyframes underline {
  from {
    -webkit-transform: scaleX(0);
            transform: scaleX(0);
  }
}
@keyframes underline {
  from {
    -webkit-transform: scaleX(0);
            transform: scaleX(0);
  }
}
.alrazy-title .word {
  display: inline-block;
  -webkit-animation: slide-up 1.25s cubic-bezier(0.5, 0.2, 0, 1);
          animation: slide-up 1.25s cubic-bezier(0.5, 0.2, 0, 1);
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation-delay: calc( .5s + (.1s * var(--word-index)) );
          animation-delay: calc( .5s + (.1s * var(--word-index)) );
}
@-webkit-keyframes slide-up {
  from {
    -webkit-transform: translateY(125%);
            transform: translateY(125%);
  }
}
@keyframes slide-up {
  from {
    -webkit-transform: translateY(125%);
            transform: translateY(125%);
  }
}
.splitting-mark {
  color: #FFF !important;
}
</style>

<div class="con">
    <div class="alrazy-title" data-splitting>Welcome to Chat Chat</div>
</div>
<script src="https://unpkg.com/splitting@1.0.0/dist/splitting.js"></script>
<script>
    Splitting();
</script>


@endsection