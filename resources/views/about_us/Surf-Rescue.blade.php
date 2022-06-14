@extends('template.template')
@section('css')

<link rel="stylesheet" href="{{asset('css/Surf-Rescue.css')}}">
<title>救生員分門別類</title>
@endsection

@section('main')

<div class="container flex justify-center max-w-full flex-wrap">
    <main class="Surf-Rescue flex-warp flex-col flex">
        <div class="breadcrumb">
            <ul class="flex items-center justify-start flex-wrap">
                <li><a href="index">首頁</a></li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                    </svg>
                </li>
                <li><a href="about">關於我們</a></li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                    </svg>
                </li>
                <li class="inpage">救生員資格檢定</li>
            </ul>
        </div>
        <div class="content flex mb-20 md:mb-10">
            <div class="content-left w-5/12 pr-12">
                <div class="Surf-Rescue-title flex flex-wrap">
                    <div class="color-line flex">
                        <div class="blue1"></div>
                        <div class="blue2"></div>
                    </div>
                    救生員分門別類
                </div>
                <div class="Surf-Rescue-content">
                    本課程包含 CPR+AED、O2(供氧）、自救踩水、仰漂、側泳、拖帶、抬頭捷，救生板救生…等。
                    對患著的生命循環照顧BLS，學習救人與自救才能確保SUP活動安全。
                </div>
            </div>
            <div class="content-right w-7/12">
                <div class="right-box w-full flex flex-wrap gap-6">

                    <div class="sport-bg flex items-center p-6">
                        <div class="sport flex justify-between flex-col">
                            <div class="icon flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.9478 10.3621C15.464 11.5987 16.8849 12.1827 18.1215 11.6665C19.3581 11.1503 19.9421 9.72936 19.4259 8.49278C18.9097 7.2562 17.4888 6.67221 16.2522 7.1884C15.0156 7.7046 14.4316 9.12551 14.9478 10.3621ZM13.1021 11.1325C13.1192 11.1734 13.1368 11.2139 13.1549 11.254C12.9186 11.2419 12.6808 11.2717 12.4534 11.3429L9.18613 7.55423C8.62391 6.90232 7.70762 6.6833 6.91137 7.0105L3.4086 8.44991L4.16879 10.2998L7.67155 8.8604L10.8867 12.5886L8.04157 15.4338L8 15.3968C6.90107 16.3826 5.47626 16.9269 4 16.9248H2V18.9248H4C5.40436 18.9271 6.78435 18.558 8 17.8548C9.21565 18.558 10.5956 18.9271 12 18.9248C13.4044 18.9271 14.7843 18.558 16 17.8548C17.2157 18.558 18.5956 18.9271 20 18.9248H22V16.9248H20C18.8401 16.9264 17.712 16.5908 16.7488 15.9688C17.1447 15.3048 17.1194 14.4648 16.6874 13.8262C17.4132 13.9093 18.1698 13.8136 18.8919 13.5121C21.1478 12.5704 22.2132 9.97824 21.2715 7.72234C20.3298 5.46643 17.7376 4.40106 15.4817 5.34276C13.2258 6.28445 12.1604 8.87663 13.1021 11.1325ZM13.1631 16.8122L15.0294 14.9459L13.0524 13.2514L9.79657 16.5072C10.4924 16.7819 11.2393 16.9259 12 16.9248C12.3931 16.9254 12.7825 16.8872 13.1631 16.8122Z" />
                                </svg>
                            </div>
                            <div class="icon-text">
                                <div class="sport-event">游泳</div>
                                <div class="sport-hint">需要泳池救生員</div>
                            </div>
                        </div>
                    </div>
                    <div class="sport-bg flex items-center p-6">
                        <div class="sport flex justify-between flex-col">
                            <div class="icon flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.3008 13H5.30078V11H10.3008V13Z" />
                                    <path
                                        d="M14.3008 4H16.3008V14.6409C16.0456 14.8341 15.8304 15.0963 15.6838 15.4261L14.0119 19.1878C13.4241 20.5104 14.3922 22.0001 15.8395 22.0001H19.6013C21.1262 22.0001 22.0902 20.3618 21.3496 19.0288L19.2597 15.267C19.0274 14.8489 18.6855 14.5598 18.3008 14.3969V2H14.3008V4ZM15.8395 20.0001L17.5114 16.2383L19.6013 20.0001L15.8395 20.0001Z" />
                                    <path d="M10.2452 22C12.3008 22 13.3008 17.5 13.3008 12C13.3008 3 7.80078 2 7.80078 2C7.80078 2 2.30073 3.33574 2.30078 12C2.30078 17.5228 3.26743 22 5.96749 22H10.2452ZM5.96025 20.0001L5.96749 20H9.99804C10.1669 19.7729 10.398 19.3095 10.6178 18.5238C11.0555 16.9588 11.3008 14.6622 11.3008 12C11.3008 7.94024 10.0772 5.97984 9.13657 5.03921C8.65279 4.55543 8.18209 4.27867 7.85022 4.1257L7.84355 4.12906C7.49314 4.30616 6.99503 4.61921 6.48607 5.14371C5.50993 6.14963 4.30076 8.13266 4.30078 12C4.30078 14.691 4.54161 16.9466 5.02644 18.4614C5.26899 19.2193 5.52739 19.6449 5.72044 19.8526C5.85859 20.0012 5.91666 20.0005 5.96025 20.0001Z" />
                                </svg>
                            </div>
                            <div class="icon-text">
                                <div class="sport-event">立槳</div>
                                <div class="sport-hint">SUP開放水域救生員</div>
                            </div>
                        </div>
                    </div>
                    <div class="sport-bg flex items-center p-6">
                        <div class="sport flex justify-between flex-col">
                            <div class="icon flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.8944 10.7447C11.5696 9.39423 11.9493 7.11681 10.9014 5.31894C9.76144 3.36305 7.27571 2.48064 3.29392 3.31892L3.70594 5.27602C7.32415 4.51429 8.67176 5.46524 9.17347 6.32604C9.48287 6.85691 9.58481 7.52455 9.54196 8.18134C9.48975 8.15053 9.43641 8.12163 9.38193 8.09471C8.67323 7.74459 7.941 7.81272 7.3313 8.08369C6.19834 8.58721 5.34324 9.82609 5.03501 11.0342C3.94841 14.7485 4.89235 17.4239 6.67175 19.1836C8.38088 20.8737 10.7455 21.6088 12.3895 21.7914L12.4445 21.7975H21.4999V19.7975H19.1198L19.3215 18.7892C19.507 17.8618 19.0175 16.9312 18.1482 16.5587L16.0984 15.6802L16.2472 14.6384L20.344 15.2852L20.6559 13.3097L11.1559 11.8097L10.844 13.7852L14.2714 14.3264L14.1185 15.3973C14.0777 15.6829 14.0996 15.9658 14.1754 16.2303L11.6264 19.6289C10.4352 19.3424 9.07818 18.7505 8.07804 17.7615C6.86045 16.5574 6.05457 14.6556 6.95926 11.5797L6.96506 11.56L6.97004 11.5401C7.1664 10.7547 7.70801 10.1049 8.14356 9.91132C8.32136 9.8323 8.42038 9.85044 8.49606 9.88783C8.5997 9.93902 8.83532 10.1187 9.08079 10.6914L9.93012 12.6732L10.8944 10.7447ZM15.6122 17.6478L13.9999 19.7975H17.0802L17.3603 18.3969L15.6122 17.6478Z" />
                                    <path d="M7 5.99998C6.40025 5.90003 5.60489 5.94078 4.7257 6.18675C3.83094 6.43707 2.81953 7.22186 2.5 8.5L4.44028 8.98507C4.52075 8.66321 5 8.1868 5.26454 8.11279C5.78535 7.96709 6.27096 7.90606 6.6712 7.97277L7 5.99998Z"/>
                                    <path d="M17 11.7975C18.6568 11.7975 20 10.4543 20 8.79749C20 7.14063 18.6568 5.79749 17 5.79749C15.3431 5.79749 14 7.14063 14 8.79749C14 10.4543 15.3431 11.7975 17 11.7975ZM17 9.79749C17.5523 9.79749 18 9.34977 18 8.79749C18 8.2452 17.5523 7.79749 17 7.79749C16.4477 7.79749 16 8.2452 16 8.79749C16 9.34977 16.4477 9.79749 17 9.79749Z" />
                                </svg>
                            </div>
                            <div class="icon-text">
                                <div class="sport-event">衝浪</div>
                                <div class="sport-hint">叫做衝浪救生員</div>
                            </div>
                        </div>
                    </div>
                    <div class="sport-bg flex items-center p-6">
                        <div class="sport flex justify-between flex-col">
                            <div class="icon flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.23867 9.83559L9.26863 7.62909C9.60877 7.37954 10.0225 7.2514 10.4437 7.26513C10.9576 7.27798 11.4546 7.45101 11.8658 7.76016C12.2771 8.06931 12.582 8.49923 12.7382 8.99014C12.914 9.54271 13.0748 9.91615 13.2203 10.1105C13.6602 10.6989 14.2309 11.1764 14.887 11.5051C15.3151 11.7196 15.772 11.8669 16.2416 11.9432L20.06 6.90482L21.6539 8.11281L14.9188 17H17.5789C17.6571 17 17.7338 17.0259 17.8003 17.0747C17.8668 17.1235 17.9206 17.1933 17.9555 17.2764C17.9905 17.3594 18.0053 17.4524 17.9983 17.5449C17.9913 17.6374 17.9627 17.7257 17.9158 17.8L16.1474 20.6C16.0689 20.7242 15.9672 20.825 15.8503 20.8944C15.7334 20.9639 15.6044 21 15.4737 21H4.52632C4.39558 21 4.26665 20.9639 4.14971 20.8944C4.03278 20.825 3.93107 20.7242 3.85263 20.6L2.08421 17.8C2.03729 17.7257 2.00872 17.6374 2.0017 17.5449C1.99468 17.4524 2.00948 17.3594 2.04445 17.2764C2.07942 17.1933 2.13318 17.1235 2.19969 17.0747C2.26621 17.0259 2.34286 17 2.42105 17H10.3897L8.37335 15.3035C8.11035 15.0906 7.90909 14.8108 7.79054 14.4935C7.67199 14.1761 7.64048 13.8326 7.69929 13.4989L8.1805 10.7644L7.54047 11.2308L5.52963 14.0059L4 12.8913L6.2226 9.82421L6.23867 9.83559ZM12.7687 16.5258L14.9941 13.5893C14.7154 13.5006 14.4421 13.3932 14.1762 13.2675C13.2932 12.85 12.5134 12.2415 11.893 11.4857L11.2341 15.2343L12.7687 16.5258Z" />
                                    <path d="M11.8004 6.79123C11.2989 6.79123 10.818 6.59151 10.4634 6.23602C10.1088 5.88052 9.90961 5.39836 9.90961 4.89561C9.90961 4.39287 10.1088 3.91071 10.4634 3.55521C10.818 3.19972 11.2989 3 11.8004 3C12.3018 3 12.7828 3.19972 13.1374 3.55521C13.4919 3.91071 13.6912 4.39287 13.6912 4.89561C13.6912 5.39836 13.4919 5.88052 13.1374 6.23602C12.7828 6.59151 12.3018 6.79123 11.8004 6.79123Z"/>
                                </svg>
                            </div>
                            <div class="icon-text">
                                <div class="sport-event">溯溪</div>
                                <div class="sport-hint">稱為急流救生</div>
                            </div>
                        </div>
                    </div>
                    <div class="sport-bg flex items-center p-6">
                        <div class="sport flex justify-between flex-col">
                            <div class="icon flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.965 18C8.84612 18.8343 8.43021 19.5977 7.79368 20.1499C7.15714 20.7022 6.34272 21.0063 5.5 21.0063C4.65728 21.0063 3.84286 20.7022 3.20632 20.1499C2.56979 19.5977 2.15388 18.8343 2.035 18H1V6C1 5.73478 1.10536 5.48043 1.29289 5.29289C1.48043 5.10536 1.73478 5 2 5H16C16.2652 5 16.5196 5.10536 16.7071 5.29289C16.8946 5.48043 17 5.73478 17 6V8H20L23 12.056V18H20.965C20.8461 18.8343 20.4302 19.5977 19.7937 20.1499C19.1571 20.7022 18.3427 21.0063 17.5 21.0063C16.6573 21.0063 15.8429 20.7022 15.2063 20.1499C14.5698 19.5977 14.1539 18.8343 14.035 18H8.965ZM15 7H3V15.05C3.39456 14.6472 3.8806 14.3457 4.41675 14.1711C4.9529 13.9966 5.52329 13.9541 6.07938 14.0474C6.63546 14.1407 7.16077 14.3669 7.61061 14.7069C8.06044 15.0469 8.42148 15.4905 8.663 16H14.337C14.505 15.647 14.73 15.326 15 15.05V7ZM17 13H21V12.715L18.992 10H17V13ZM17.5 19C17.898 19 18.2796 18.8419 18.561 18.5605C18.8424 18.2791 19.0005 17.8975 19.0005 17.4995C19.0005 17.1015 18.8424 16.7199 18.561 16.4385C18.2796 16.1571 17.898 15.999 17.5 15.999C17.102 15.999 16.7204 16.1571 16.439 16.4385C16.1576 16.7199 15.9995 17.1015 15.9995 17.4995C15.9995 17.8975 16.1576 18.2791 16.439 18.5605C16.7204 18.8419 17.102 19 17.5 19V19ZM7 17.5C7 17.303 6.9612 17.108 6.88582 16.926C6.81044 16.744 6.69995 16.5786 6.56066 16.4393C6.42137 16.3001 6.25601 16.1896 6.07403 16.1142C5.89204 16.0388 5.69698 16 5.5 16C5.30302 16 5.10796 16.0388 4.92597 16.1142C4.74399 16.1896 4.57863 16.3001 4.43934 16.4393C4.30005 16.5786 4.18956 16.744 4.11418 16.926C4.0388 17.108 4 17.303 4 17.5C4 17.8978 4.15804 18.2794 4.43934 18.5607C4.72064 18.842 5.10218 19 5.5 19C5.89782 19 6.27936 18.842 6.56066 18.5607C6.84196 18.2794 7 17.8978 7 17.5V17.5Z" />
                                    <path d="M10.125 10.875V9H8.875V10.875H7V12.125H8.87437L8.875 14H10.125L10.1244 12.125H12V10.875H10.125Z" />
                                </svg>
                            </div>
                            <div class="icon-text">
                                <div class="sport-event">救護車</div>
                                <div class="sport-hint">緊急急救員</div>
                            </div>
                        </div>
                    </div>
                    <div class="sport-bg flex items-center p-6">
                        <div class="sport flex justify-between flex-col">
                            <div class="icon flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20 15V3H22V15C22 17.7614 19.7614 20 17 20H12.5002C12.0441 20.6072 11.3179 21 10.5 21C9.11929 21 8 19.8807 8 18.5C8 17.1193 9.11929 16 10.5 16C11.7095 16 12.7184 16.8589 12.95 18H17C18.6569 18 20 16.6569 20 15ZM10.5 19C10.7761 19 11 18.7761 11 18.5C11 18.2239 10.7761 18 10.5 18C10.2239 18 10 18.2239 10 18.5C10 18.7761 10.2239 19 10.5 19Z" />
                                    <path d="M5 5C3.34315 5 2 6.34315 2 8V12C2 13.6569 3.34315 15 5 15H7.09524C8.68359 15 9.97419 13.7252 9.99962 12.1429H11.0004C11.0258 13.7252 12.3164 15 13.9048 15H16C17.6569 15 19 13.6569 19 12V8C19 6.34315 17.6569 5 16 5H5ZM4 8C4 7.44772 4.44772 7 5 7H16C16.5523 7 17 7.44772 17 8V12C17 12.5523 16.5523 13 16 13H13.9048C13.4051 13 13 12.5949 13 12.0952C13 11.017 12.1259 10.1429 11.0476 10.1429H9.95238C8.87411 10.1429 8 11.017 8 12.0952C8 12.5949 7.59492 13 7.09524 13H5C4.44772 13 4 12.5523 4 12V8Z" />
                                </svg>
                            </div>
                            <div class="icon-text">
                                <div class="sport-event">潛水</div>
                                <div class="sport-hint">救援潛水員</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="qualifying content flex mt-20 mb-120 md:mt-10">
            <div class="qualifying-left w-5/12">
                <div class="Surf-Rescue-title flex flex-wrap">
                    <div class="color-line flex">
                        <div class="blue1"></div>
                        <div class="blue2"></div>
                    </div>
                    檢定內容
                </div>
            </div>
            <div class="qualifying-right w-7/12">
                <div class="top">
                    <div class="content flex flex-col">
                        <div class="content-right flex">
                            <div class="check-box">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.0007 15.172L19.1927 5.979L20.6077 7.393L10.0007 18L3.63672 11.636L5.05072 10.222L10.0007 15.172Z" />
                                </svg>
                            </div>
                            <div class="detail">開放水域游泳300公尺，8分30秒內完成。</div>
                        </div>
                        <div class="content-right flex">
                            <div class="check-box">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.0007 15.172L19.1927 5.979L20.6077 7.393L10.0007 18L3.63672 11.636L5.05072 10.222L10.0007 15.172Z" />
                                </svg>
                            </div>
                            <div class="detail">SUP救援板救援300公尺，8分30秒內完成。</div>
                        </div>
                        <div class="content-right flex">
                            <div class="check-box">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.0007 15.172L19.1927 5.979L20.6077 7.393L10.0007 18L3.63672 11.636L5.05072 10.222L10.0007 15.172Z" />
                                </svg>
                            </div>
                            <div class="detail">急救CPR+AED、急救法緊急供氧BLS等。</div>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <span>水域管理辦法規定教練要有救生員才能帶團辦活動。</span>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection

