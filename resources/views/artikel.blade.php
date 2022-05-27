@extends('layout.master')
@section('title', 'Artikel')
@section('page-content')
<div class="container">
    <div class="row pt-5">
        <div class="col-3">
            <div class="col-sm-3 menu sticky-top pr-0 mt-5 sidebar-menu">
                <img class="" src="{{ URL::to('https://test-git-ui.herokuapp.com/assets/Sidebar Article.png') }}" alt="Image">
            </div>
        </div>
        <div class="col-7">
            <img class="" src="{{ URL::to('https://test-git-ui.herokuapp.com/assets/Frame 2583.png') }}" alt="Image">
            <img class="" src="{{ URL::to('https://test-git-ui.herokuapp.com/assets/Frame 2584.png') }}" alt="Image">
        </div>
        <div class="col-2">
        </div>
    </div>

</div>
<script type="text/javascript">
window.onload = function(){
$( ".sidebar-menu" ).hide();
   $(function(){
        $(window).scroll(function(e) {
            if($(this).scrollTop()>0){
            $('.navbar').fadeOut();
            }
            else{
            $('.navbar').fadeIn();
            }
        });
    });

    $(function(){
        $(window).scroll(function(e) {
            if($(this).scrollTop()>10){
            $('.sidebar-menu').fadeIn();
            }
            else{
            $('.sidebar-menu').fadeOut();
            }
        });
    });

};
</script>
@endsection
