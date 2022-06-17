@extends('template.template')

@section('css')
<link rel="stylesheet" href="{{asset('css/createAccount.css')}}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
{{-- <link rel="stylesheet" href="./css/locomotive-scroll.css" /> --}}
<title>註冊帳號</title>
@endsection

@section('main')
<div class="container flex justify-center max-w-full flex-wrap " data-scroll-container>
    <div class="create-content w-full h-screen flex items-center justify-center"  data-scroll-section>
        <div id="create" class="createAccount fixed">
            <div class="w-full h-full content flex flex-col">
                <div class="w-full contentTop flex justify-end">
                    {{-- <button id="btn-close1" class="rounded-full">
                        <a href="index">
                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 22C0 9.84974 9.84974 0 22 0C34.1503 0 44 9.84974 44 22C44 34.1503 34.1503 44 22 44C9.84974 44 0 34.1503 0 22Z"
                                    fill="#F3F6F9" />
                                <g opacity="0.7">
                                    <path
                                        d="M22.0007 20.586L26.9507 15.636L28.3647 17.05L23.4147 22L28.3647 26.95L26.9507 28.364L22.0007 23.414L17.0507 28.364L15.6367 26.95L20.5867 22L15.6367 17.05L17.0507 15.636L22.0007 20.586Z"
                                        fill="#141414" />
                                </g>
                            </svg>
                        </a>
                    </button> --}}
                </div>
                <div class="contentBtm flex flex-col w-full">
                    <div class="contentBtmInnerbox flex flex-col w-full">
                        <h1 class="h1">建立帳戶</h1>
                        <div class="ps">
                            <span class="ts">已經有帳號了嗎？</span>
                            <a style="cursor: pointer;" data-modal-toggle="authentication-modal" class="tsb">登入</a>
                        </div>
                        <form name="formCreate" class=" w-full" action="/createAccount/store" method="post">
                            @csrf
                            <div class="innerbox-nickName flex flex-col w-full">
                                <label class="" for="nickName"><span class="ts ts75">暱稱</span><span class="ts star">*</span></label>
                                <input class="input-text w-full focus:outline-none" id="nickName" type="text" name="name" value="" placeholder="輸入暱稱">
                            </div>

                            <div class="innerbox-mail flex flex-col w-full">
                                <label class="" for="mail"><span class="ts ts75">電子郵件地址</span><span class="ts star">*</span></label>
                                <input class="input-text w-full focus:outline-none" id="mail" type="text" name="email" value="" placeholder="輸入電子郵件地址"
                                onkeyup="value=value. replace(/[^\a-\z\A-\Z0-9\@\.]/g,'')">
                            </div>

                            <div class="innerbox-password flex flex-col w-full">
                                <label class="" for="password"><span class="ts ts75">密碼</span><span class="ts star">*</span></label>
                                <input class="input-text w-full focus:outline-none" id="password" type="password" name="password" value="" placeholder="輸入 8 個字元，包含至少一個大寫或小寫英文與至少一個數字"
                                onkeyup="value=value. replace(/[^\a-\z\A-\Z0-9]/g,'')">

                            </div>

                            <div class="innerbox-pwCheck flex flex-col w-full">
                                <label class="" for="pwCheck"><span class="ts ts75">確認密碼</span><span class="ts star">*</span></label>
                                <input class="input-text w-full focus:outline-none" id="pwCheck" type="password" name="pwCheck" value="" placeholder="再次輸入密碼"
                                onkeyup="value=value. replace(/[^\a-\z\A-\Z0-9]/g,'')">
                            </div>
                        </form>
                        <span class="right ts">點選「建立帳戶」，即表示您同意接受 隱私權保護政策</span>
                    </div>
                    <div class="btnCreate flex justify-end">
                        <button class="btn-next rounded flex justify-center items-center" onclick="create()" type="button">建立帳戶</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
<script src="{{asset('js/script.js')}}"></script>

<script src="{{asset('js/createAccount.js')}}"></script>

@endsection

