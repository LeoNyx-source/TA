<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SVG Editor Popup Posisi Klik</title>

    <style>
        body {
            font-family: "Inter", sans-serif;
            margin: 0;
            background: #f4f5f7;
            overflow-x: hidden;
        }

        g.clickable:hover {
            cursor: pointer;
            opacity: 0.7;
        }

        /* Popup kecil */
        #popupBox {
            position: absolute;
            background: white;
            padding: 12px 16px;
            border-radius: 8px;
            width: 180px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
            display: none;
            z-index: 999;
        }

        #popupBox input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        .btn {
            padding: 8px 14px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .save {
            background: #18a4ff;
            color: white;
            width: 100%;
        }

        .save:hover {
            background: #0d8de4;
        }
    </style>
</head>

<body>

    <!-- POPUP -->
    <div id="popupBox">
        <input type="text" id="inputLabel" placeholder="Tulis label baru...">
        <button class="btn save" id="saveBtn">OK</button>
    </div>

    <!-- SVG -->
    <div style="padding:20px;">
        <svg width="1095" height="265" viewBox="0 0 1095 265" fill="none" xmlns="http://www.w3.org/2000/svg">




            {{-- 

                             <path d="M373.998 110.503L374 78.9992L528.998 79.0026L528.998 60.0025" stroke="#000000"></path> --}}
            {{-- 

                             <path d="M373.998 110.503L374 78.9992L528.998 79.0026L528.998 60.0025" stroke="#000000"></path> --}}





            <g class="clickable">
                <path d="M374 111V69.6612L225 65.5L91 60.5V39" stroke="#20FD2F" data-rect="1">
                </path>
                <rect x="83.9844" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="1"></rect>
                <text x="90.4762" y="34.8689" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C1</text>
            </g>



            <g class="clickable">
                <path d="M374 111V69.6612L107 59V39" stroke="#20FD2F" data-rect="2"></path>
                <rect x="100.211" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="2"></rect>
                <text x="106.7028" y="34.8689" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C2</text>
            </g>


            <g class="clickable">
                <path d="M374 111V69.6612L123 58.5V39" stroke="#20FD2F" data-rect="3"></path>
                <rect x="116.445" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="3"></rect>
                <text x="122.9368" y="34.8689" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C3</text>
            </g>


            <g class="clickable">
                <path d="M374 111V69.6612L140 61V39" stroke="#20FD2F" data-rect="4"></path>
                <rect x="132.672" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="4"></rect>
                <text x="139.1630" y="34.8689" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C4</text>
            </g>


            <g class="clickable">
                <path d="M374 111V69.6612L156 61V39" stroke="#20FD2F" data-rect="5"></path>
                <rect x="148.898" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="5"></rect>
                <text x="155.3890" y="34.8689" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C5</text>
            </g>


            <g class="clickable">
                <path d="M374 111V69.6612H185V39" stroke="#20FD2F" data-rect="6"></path>
                <rect x="178.117" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="6"></rect>
                <text x="184.6090" y="34.8689" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C6</text>
            </g>


            <g class="clickable">
                <path d="M374 111V69.6612H201V39" stroke="#20FD2F" data-rect="7"></path>
                <rect x="194.344" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="7"></rect>
                <text x="200.8350" y="34.8689" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C7</text>
            </g>


            <g class="clickable">
                <path d="M374 111V69.6612H218V39" stroke="#20FD2F" data-rect="8"></path>
                <rect x="210.578" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="8"></rect>
                <text x="217.0690" y="34.8689" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C8</text>
            </g>


            <g class="clickable">
                <path d="M374 111V69.6612H234V39" stroke="#20FD2F" data-rect="9"></path>
                <rect x="226.805" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="9"></rect>
                <text x="233.2970" y="34.8689" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C9</text>
            </g>


            <g class="clickable">
                <path d="M374 111V69.6612H250V39" stroke="#20FD2F" data-rect="10"></path>
                <rect x="243.039" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="10"></rect>
                <text x="249.5310" y="34.8689" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C10</text>
            </g>


            <g class="clickable">
                <path d="M374 111V70L91 65V85" stroke="#20FD2F" data-rect="11"></path>
                <rect x="83.9844" y="74.2256" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="11"></rect>
                <text x="90.4762" y="86.8040" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C11</text>
            </g>


            <g class="clickable">
                <path d="M374 111V70L107 65.5V85" stroke="#20FD2F" data-rect="12"></path>
                <rect x="100.211" y="74.2261" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="12"></rect>
                <text x="106.7028" y="86.8040" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C12</text>
            </g>


            <g class="clickable">
                <path d="M374 111V70L123 65.5V85" stroke="#20FD2F" data-rect="13"></path>
                <rect x="116.445" y="74.2261" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="13"></rect>
                <text x="122.9368" y="86.8040" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C13</text>
            </g>


            <g class="clickable">
                <path d="M374 111V70L140 66V85" stroke="#20FD2F" data-rect="14"></path>
                <rect x="132.672" y="74.2261" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="14"></rect>
                <text x="139.1630" y="86.8040" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C14</text>
            </g>


            <g class="clickable">
                <path d="M374 111V70L156 67V85" stroke="#20FD2F" data-rect="15"></path>
                <rect x="148.898" y="74.2261" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="15"></rect>
                <text x="155.3890" y="86.8040" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C15</text>
            </g>


            <g class="clickable">
                <path d="M374 111V70H185V85" stroke="#20FD2F" data-rect="16"></path>
                <rect x="178.117" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="16"></rect>
                <text x="184.6090" y="91.6736" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C16</text>
            </g>


            <g class="clickable">
                <path d="M374 111V70H201V85" stroke="#20FD2F" data-rect="17"></path>
                <rect x="194.344" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="17"></rect>
                <text x="200.8350" y="91.6736" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C17</text>
            </g>


            <g class="clickable">
                <path d="M374 111V70H218V85" stroke="#20FD2F" data-rect="18"></path>
                <rect x="210.578" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="18"></rect>
                <text x="217.0690" y="91.6736" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C18</text>
            </g>


            <g class="clickable">
                <path d="M374 111V70H234V85" stroke="#20FD2F" data-rect="19"></path>
                <rect x="226.805" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="19"></rect>
                <text x="233.2970" y="91.6736" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C19</text>
            </g>


            <g class="clickable">
                <path d="M374 111V70H249V85" stroke="#20FD2F" data-rect="20"></path>
                <rect x="243.039" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="20"></rect>
                <text x="249.5310" y="91.6736" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C20</text>
            </g>


            <g class="clickable">
                <path d="M374 111V70H271V85" stroke="#20FD2F" data-rect="21"></path>
                <rect x="264.133" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="21"></rect>
                <text x="270.625" y="91.6736" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C21</text>
            </g>


            <g class="clickable">
                <path d="M374 111V70H287V85" stroke="#20FD2F" data-rect="22"></path>
                <rect x="280.359" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="22"></rect>
                <text x="286.851" y="91.6736" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C22</text>
            </g>


            <g class="clickable">
                <path d="M374 111V70H304V85" stroke="#20FD2F" data-rect="23"></path>
                <rect x="296.594" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="23"></rect>
                <text x="303.086" y="91.6736" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C23</text>
            </g>


            <g class="clickable">
                <path d="M374 111V70H319V85" stroke="#20FD2F" data-rect="24"></path>
                <rect x="312.82" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="24"></rect>
                <text x="319.312" y="91.6736" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C24</text>
            </g>


            <g class="clickable">
                <path d="M374 111V70H336V85" stroke="#20FD2F" data-rect="25"></path>
                <rect x="329.055" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="25"></rect>
                <text x="335.547" y="91.6736" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C25</text>
            </g>





            <g class="clickable">
                <path d="M374.5 111V79H676V91.5H840L884.5 107.5H1077.5" stroke="#20FD2F" data-rect="80">
                </path>
                <rect x="1094.33" y="99.3975" width="12.9836" height="25.1557"
                    transform="rotate(90.0373 1094.33 99.3975)" fill="#A8CB8D" data-rect="80">
                </rect>
                <text x="1082.33" y="105.3975" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C80</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1079 123" stroke="#20FD2F" data-rect="81"></path>
                <rect x="1094.31" y="115.627" width="12.9836" height="25.1557"
                    transform="rotate(90.0373 1094.31 115.627)" fill="#A8CB8D" data-rect="81">
                </rect>
                <text x="1082.31" y="121.627" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C81</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1077.5 139.5" stroke="#20FD2F" data-rect="82"></path>
                <rect x="1094.3" y="131.856" width="12.9836" height="25.1557"
                    transform="rotate(90.0373 1094.3 131.856)" fill="#A8CB8D" data-rect="82"></rect>
                <text x="1082.3" y="137.856" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C82</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1076.5 155" stroke="#20FD2F" data-rect="83"></path>
                <rect x="1094.29" y="148.086" width="12.9836" height="25.1557"
                    transform="rotate(90.0373 1094.29 148.086)" fill="#A8CB8D" data-rect="83">
                </rect>
                <text x="1082.29" y="154.086" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C83</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1074 172" stroke="#20FD2F" data-rect="84"></path>
                <rect x="1094.28" y="164.315" width="12.9836" height="25.1557"
                    transform="rotate(90.0373 1094.28 164.315)" fill="#A8CB8D" data-rect="84">
                </rect>
                <text x="1082.28" y="170.315" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C84</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1016.5 195H1075" stroke="#20FD2F" data-rect="85">
                </path>
                <rect x="1094.33" y="187.037" width="12.9836" height="25.1557"
                    transform="rotate(90.0373 1094.33 187.037)" fill="#A8CB8D" data-rect="85">
                </rect>
                <text x="1082.33" y="193.037" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C85</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1016.5 195L1076.5 211" stroke="#20FD2F"
                    data-rect="86"></path>
                <rect x="1094.31" y="203.267" width="12.9836" height="25.1557"
                    transform="rotate(90.0373 1094.31 203.267)" fill="#A8CB8D" data-rect="86">
                </rect>
                <text x="1082.31" y="209.267" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C86</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1036.5 226.5H1076.5" stroke="#20FD2F" data-rect="87">
                </path>
                <rect x="1094.3" y="219.496" width="12.9836" height="25.1557"
                    transform="rotate(90.0373 1094.3 219.496)" fill="#A8CB8D" data-rect="87"></rect>
                <text x="1082.3" y="225.496" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C87</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1047.5 242.5H1075.5" stroke="#20FD2F" data-rect="88">
                </path>
                <rect x="1094.29" y="235.726" width="12.9836" height="25.1557"
                    transform="rotate(90.0373 1094.29 235.726)" fill="#A8CB8D" data-rect="88">
                </rect>
                <text x="1082.29" y="241.726" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C88</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1061 259.5H1077.5" stroke="#20FD2F" data-rect="89">
                </path>
                <rect x="1094.28" y="251.955" width="12.9836" height="25.1557"
                    transform="rotate(90.0373 1094.28 251.955)" fill="#A8CB8D" data-rect="89">
                </rect>
                <text x="1082.28" y="257.955" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C89</text>
            </g>



            <g class="clickable">
                <path d="M375 111.5V78H677V91H819L879 111.5H901V83" stroke="#20FD2F" data-rect="36">
                </path>
                <rect x="893.836" y="70.168" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="36"></rect>
                <text x="900.328" y="82.745" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C36</text>
            </g>


            <g class="clickable">
                <path d="M375 111.5V78H677V91H819L879 111.5H918V87.5" stroke="#20FD2F" data-rect="37">
                </path>
                <rect x="910.062" y="70.168" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="37"></rect>
                <text x="916.554" y="82.745" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C37</text>
            </g>


            <g class="clickable">
                <path d="M375 111.5V78H677V91H819L879 111.5H933.5V88.5" stroke="#20FD2F" data-rect="38">
                </path>
                <rect x="926.297" y="70.168" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="38"></rect>
                <text x="932.789" y="82.745" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C38</text>
            </g>


            <g class="clickable">
                <path d="M375 111.5V78H677V91H819L879 111.5H949V91" stroke="#20FD2F" data-rect="39">
                </path>
                <rect x="942.523" y="70.168" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="39"></rect>
                <text x="949.015" y="82.745" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C39</text>
            </g>


            <g class="clickable">
                <path d="M375 111.5V78H677V91H819L879 111.5H966V91" stroke="#20FD2F" data-rect="40">
                </path>
                <rect x="958.758" y="70.168" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="40"></rect>
                <text x="965.250" y="82.745" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C40</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111.5V78.5H676.5V92H821L954.5 178L946 190.5" stroke="#20FD2F" data-rect="46"></path>
                <rect x="943" y="182" width="12.9836" height="25.1557" transform="rotate(33.8077 943 182)"
                    fill="#A8CB8D" data-rect="46"></rect>
                <text x="944.492" y="198.578" transform="rotate(33.8077 949.492 194.578)" text-anchor="middle"
                    dominant-baseline="middle" font-size="5" fill="black">C46</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111.5V78.5H676.5V92H821L841.5 106L831 122.5" stroke="#20FD2F" data-rect="42"></path>
                <rect x="828" y="114.836" width="12.9836" height="25.1557" transform="rotate(30.1533 828 114.836)"
                    fill="#A8CB8D" data-rect="42"></rect>
                <text x="829.492" y="131.414" transform="rotate(30.1533 834.492 127.414)" text-anchor="middle"
                    dominant-baseline="middle" font-size="5" fill="black">C42</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111.5V78.5H676.5V92H821L857.5 112.5L845.5 130.5" stroke="#20FD2F" data-rect="43">
                </path>
                <rect x="842.031" y="122.988" width="12.9836" height="25.1557"
                    transform="rotate(30.1533 842.031 122.988)" fill="#A8CB8D" data-rect="43">
                </rect>
                <text x="843.523" y="139.566" transform="rotate(30.1533 848.523 135.566)" text-anchor="middle"
                    dominant-baseline="middle" font-size="5" fill="black">C43</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111.5V78.5H676.5V92H821L870.5 120L859.5 138.5" stroke="#20FD2F" data-rect="44"></path>
                <rect x="856.07" y="131.141" width="12.9836" height="25.1557"
                    transform="rotate(30.1533 856.07 131.141)" fill="#A8CB8D" data-rect="44"></rect>
                <text x="857.562" y="147.719" transform="rotate(30.1533 862.562 143.719)" text-anchor="middle"
                    dominant-baseline="middle" font-size="5" fill="black">C44</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111.5V78.5H676.5V92H821L884.5 127.5L872 148.5" stroke="#20FD2F" data-rect="45"></path>
                <rect x="870.102" y="139.293" width="12.9836" height="25.1557"
                    transform="rotate(30.1533 870.102 139.293)" fill="#A8CB8D" data-rect="45">
                </rect>
                <text x="871.594" y="155.871" transform="rotate(30.1533 876.594 151.871)" text-anchor="middle"
                    dominant-baseline="middle" font-size="5" fill="black">C45</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111.5V78.5H676.5V92H821L828.5 96L817 114.5" stroke="#20FD2F" data-rect="41"></path>
                <rect x="813.969" y="106.683" width="12.9836" height="25.1557"
                    transform="rotate(30.1533 813.969 106.683)" fill="#A8CB8D" data-rect="41">
                </rect>
                <text x="815.460" y="123.261" transform="rotate(30.1533 820.460 119.261)" text-anchor="middle"
                    dominant-baseline="middle" font-size="5" fill="black">C41</text>
            </g>



            <g class="clickable">
                <path d="M374.5 111.5V78.5H676.5V92H821L968.5 187.5L959 200" stroke="#20FD2F" data-rect="47"></path>
                <rect x="956.484" y="191.031" width="12.9836" height="25.1557"
                    transform="rotate(33.8077 956.484 191.031)" fill="#A8CB8D" data-rect="47">
                </rect>
                <text x="957.976" y="207.609" transform="rotate(33.8077 962.976 203.609)" text-anchor="middle"
                    dominant-baseline="middle" font-size="5" fill="black">C47</text>
            </g>



            <g class="clickable">
                <path d="M374.5 111.5V78.5H676.5V92H821L980.5 196.5L973 207.5" stroke="#20FD2F" data-rect="48"></path>
                <rect x="969.969" y="200.061" width="12.9836" height="25.1557"
                    transform="rotate(33.8077 969.969 200.061)" fill="#A8CB8D" data-rect="48">
                </rect>
                <text x="971.460" y="216.639" transform="rotate(33.8077 976.460 212.639)" text-anchor="middle"
                    dominant-baseline="middle" font-size="5" fill="black">C48</text>
            </g>



            <g class="clickable">
                <path d="M374.5 111.5V78.5H676.5V92H821L994 206L986.5 216" stroke="#20FD2F" data-rect="49"></path>
                <rect x="983.453" y="209.091" width="12.9836" height="25.1557"
                    transform="rotate(33.8077 983.453 209.091)" fill="#A8CB8D" data-rect="49">
                </rect>
                <text x="984.945" y="225.669" transform="rotate(33.8077 989.945 221.669)" text-anchor="middle"
                    dominant-baseline="middle" font-size="5" fill="black">C49</text>
            </g>



            <g class="clickable">
                <path d="M374.5 111.5V78.5H676.5V92H821L1008.5 216L1001 224.5" stroke="#20FD2F" data-rect="50"></path>
                <rect x="996.938" y="218.121" width="12.9836" height="25.1557"
                    transform="rotate(33.8077 996.938 218.121)" fill="#A8CB8D" data-rect="50">
                </rect>
                <text x="998.429" y="234.699" transform="rotate(33.8077 1003.429 230.699)" text-anchor="middle"
                    dominant-baseline="middle" font-size="5" fill="black">C50</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V79.1684H611V91.5H730.5V63" stroke="#20FD2F" data-rect="51">
                </path>
                <rect x="723.43" y="52.3154" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="51"></rect>
                <text x="729.92" y="64.89" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C51</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V79.1684H621.629V91.5H746.5V63" stroke="#20FD2F" data-rect="52">
                </path>
                <rect x="739.656" y="52.3154" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="52"></rect>
                <text x="746.15" y="64.89" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C52</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V79.1684H631.594V91.5H761.5V63" stroke="#20FD2F" data-rect="53">
                </path>
                <rect x="755.891" y="52.3154" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="53"></rect>
                <text x="762.38" y="64.89" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C53</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V79.1684H643.552V91.5H779.5V63" stroke="#20FD2F" data-rect="54">
                </path>
                <rect x="772.117" y="52.3154" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="54"></rect>
                <text x="778.61" y="64.89" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C54</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V79.1684H654.181V91.5H795.5V63" stroke="#20FD2F" data-rect="55">
                </path>
                <rect x="788.344" y="52.3154" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="55"></rect>
                <text x="794.85" y="64.89" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C55</text>
            </g>






            <g class="clickable">
                <path d="M374 111V69.6612H272V50" stroke="#20FD2F" data-rect="56"></path>
                <rect x="264.133" y="32.0283" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="56"></rect>
                <text x="270.625" y="44.606" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C56</text>
            </g>


            <g class="clickable">
                <path d="M374 111V69.6612H288V50" stroke="#20FD2F" data-rect="57"></path>
                <rect x="280.359" y="32.0283" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="57"></rect>
                <text x="286.851" y="44.606" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C57</text>
            </g>


            <g class="clickable">
                <path d="M374 111V69.6612H303V50" stroke="#20FD2F" data-rect="58"></path>
                <rect x="296.594" y="32.0283" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="58"></rect>
                <text x="303.086" y="44.606" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C58</text>
            </g>


            <g class="clickable">
                <path d="M374 111V69.6612H319V50" stroke="#20FD2F" data-rect="59"></path>
                <rect x="312.82" y="32.0283" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="59"></rect>
                <text x="319.312" y="44.606" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C59</text>
            </g>





            <g class="clickable">
                <path d="M374 110.5V69.5H334.5V50" stroke="#20FD2F" data-rect="60"></path>
                <rect x="329.055" y="32.0283" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="60"></rect>
                <text x="335.547" y="44.606" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C60</text>
            </g>


            <g class="clickable">
                <path d="M374 110.5V45.5" stroke="#20FD2F" data-rect="61"></path>
                <rect x="367.195" y="27.1602" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="61"></rect>
                <text x="373.687" y="39.738" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C61</text>
            </g>


            <g class="clickable">
                <path d="M374 110.5L391 45" stroke="#20FD2F" data-rect="62"></path>
                <rect x="383.422" y="27.1602" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="62"></rect>
                <text x="389.914" y="39.738" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C62</text>
            </g>


            <g class="clickable">
                <path d="M374 110.5L408 47" stroke="#20FD2F" data-rect="63"></path>
                <rect x="399.656" y="27.1602" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="63"></rect>
                <text x="406.148" y="39.738" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C63</text>
            </g>


            <g class="clickable">
                <path d="M374 110.5L422.5 70.5L422.5 47" stroke="#20FD2F" data-rect="64"></path>
                <rect x="415.883" y="27.1602" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="64"></rect>
                <text x="422.375" y="39.738" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C64</text>
            </g>


            <g class="clickable">
                <path d="M374 110.5L440 84.5L440 45" stroke="#20FD2F" data-rect="65"></path>
                <rect x="432.117" y="27.1602" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="65"></rect>
                <text x="438.609" y="39.738" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C65</text>
            </g>

            <g class="clickable">
                <path d="M373.998 110.503L374 78.9992L528.998 79.0026L528.998 60.0025" stroke="#20FD2F"
                    data-rect="66"></path>
                <rect x="522.188" y="45.0127" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="66"></rect>
                <text x="528.68" y="57.59" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C66</text>
            </g>


            <g class="clickable">
                <path d="M374.5 110.5V79H545V63" stroke="#20FD2F" data-rect="67"></path>
                <rect x="538.414" y="45.0127" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="67"></rect>
                <text x="544.91" y="57.59" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C67</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V79.1684H561.5V63" stroke="#20FD2F" data-rect="68"></path>
                <rect x="554.648" y="45.0127" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="68"></rect>
                <text x="561.14" y="57.59" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C68</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V79.1684H578.5V63" stroke="#20FD2F" data-rect="69"></path>
                <rect x="570.875" y="45.0127" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="69"></rect>
                <text x="577.36" y="57.59" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C69</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V79.1684H593.5V63" stroke="#20FD2F" data-rect="70"></path>
                <rect x="587.102" y="45.0127" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="70"></rect>
                <text x="593.59" y="57.59" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C70</text>
            </g>


            <g class="clickable">
                <path d="M374 110.502L374.002 78.9991L529 79.0025L528.998 93.5" stroke="#20FD2F" data-rect="71">
                </path>
                <rect x="522.188" y="86.3975" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="71"></rect>
                <text x="528.68" y="98.97" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C71</text>
            </g>



            <g class="clickable">
                <path d="M374.5 111V78H545V94" stroke="#20FD2F" data-rect="72"></path>
                <rect x="538.414" y="86.3975" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="72"></rect>
                <text x="544.91" y="98.97" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C72</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V78H561.5V94" stroke="#20FD2F" data-rect="73"></path>
                <rect x="554.648" y="86.3975" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="73"></rect>
                <text x="561.14" y="98.97" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C73</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V78H578.5V94" stroke="#20FD2F" data-rect="74"></path>
                <rect x="570.875" y="86.3975" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="74"></rect>
                <text x="577.36" y="98.97" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C74</text>
            </g>


            <g class="clickable">
                <path d="M374.5 111V78H593.5V94" stroke="#20FD2F" data-rect="75"></path>
                <rect x="587.109" y="86.3975" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="75"></rect>
                <text x="593.60" y="98.97" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C75</text>
            </g>


            <g class="clickable">
                <path d="M374 111V69.6612L225 65.5L61.5 56.5L7.5 40.5V17.5" stroke="#20FD2F" data-rect="76"></path>
                <rect width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="76"></rect>
                <text x="6.49" y="12.58" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C76</text>
            </g>


            <g class="clickable">
                <path d="M374 111V69.6612L225 65.5L61.5 56.5L21 44V21" stroke="#20FD2F" data-rect="77">
                </path>
                <rect x="15.9844" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="77">
                </rect>
                <text x="22.48" y="12.58" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C77</text>
            </g>


            <g class="clickable">
                <path d="M374 111V69.6612L225 65.5L38.5 56.5V20.5" stroke="#20FD2F" data-rect="78">
                </path>
                <rect x="31.9688" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="78">
                </rect>
                <text x="38.46" y="12.58" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C78</text>
            </g>


            <g class="clickable">
                <path d="M374 111V69.6612L225 65.5L54 57.5V21" stroke="#20FD2F" data-rect="79">
                </path>
                <rect x="47.9531" width="12.9836" height="25.1557" fill="#A8CB8D" data-rect="79">
                </rect>
                <text x="54.44" y="12.58" text-anchor="middle" dominant-baseline="middle" font-size="5"
                    fill="black">C79</text>
            </g>









        </svg>
    </div>

    <script>
        let selectedGroup = null;
        let hasUnsavedChanges = false;
        const popup = document.getElementById("popupBox");
        const input = document.getElementById("inputLabel");

        /* Klik G */
        document.querySelectorAll("g.clickable").forEach(g => {
            g.addEventListener("click", (event) => {
                selectedGroup = g;

                // posisi popup sesuai mouse
                popup.style.left = event.clientX + "px";
                popup.style.top = event.clientY + "px";
                popup.style.display = "block";

                // input selalu kosong
                input.value = "";
                input.focus();
            });
        });

        /* Tombol OK */
        document.getElementById("saveBtn").addEventListener("click", () => {
            saveLabel();
        });

        /* Enter untuk simpan */
        input.addEventListener("keydown", (e) => {
            if (e.key === "Enter") {
                saveLabel();
            }
        });

        function saveLabel() {
            const newLabel = input.value.trim();
            if (!selectedGroup || newLabel === "") return;

            selectedGroup.querySelector("text").textContent = newLabel;
            selectedGroup.querySelector("rect").setAttribute("data-rect", newLabel);
            selectedGroup.querySelector("path").setAttribute("data-path", newLabel);

            hasUnsavedChanges = true;
            popup.style.display = "none";
        }

        /* Validasi refresh */
        window.addEventListener("beforeunload", function(e) {
            if (!hasUnsavedChanges) return;
            e.preventDefault();
            e.returnValue = "";
        });
    </script>

</body>

</html>
