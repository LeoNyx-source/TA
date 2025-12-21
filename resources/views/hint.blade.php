<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>SVG data-rect Popup</title>
  <style>
    body {
      background: #000;
      color: #eee;
      font-family: Arial, sans-serif;
    }
    svg path, svg rect {
      cursor: pointer;
      transition: stroke-width 0.15s ease;
    }
    svg path:hover, svg rect:hover {
      stroke-width: 2;
    }
  </style>
</head>
<body>

<p>Klik garis atau kotak di SVG → popup muncul → isi value → cek di Inspect (Elements) atribut <code>data-rect</code>.</p>

<!-- PENTING: SVG HARUS INLINE, BUKAN <img src="..."> -->
<svg width="1095" height="265" viewBox="0 0 1095 265" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                             <path d="M374.5 111V78H545V94" stroke="#20FD2F" />
                             <path d="M374.5 111V78H561.5V94" stroke="#20FD2F" />
                             <path d="M374.5 111V78H578.5V94" stroke="#20FD2F" />
                             <path d="M374.5 111V78H593.5V94" stroke="#20FD2F" />
                             <path d="M374.5 111V79H676V91.5H840L884.5 107.5H1077.5" stroke="#20FD2F" />
                             <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1079 123" stroke="#20FD2F" />
                             <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1077.5 139.5" stroke="#20FD2F" />
                             <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1076.5 155" stroke="#20FD2F" />
                             <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1074 172" stroke="#20FD2F" />
                             <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1016.5 195H1075" stroke="#20FD2F" />
                             <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1016.5 195L1076.5 211" stroke="#20FD2F" />
                             <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1036.5 226.5H1076.5" stroke="#20FD2F" />
                             <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1047.5 242.5H1075.5" stroke="#20FD2F" />
                             <path d="M374.5 111V79H676V91.5H840L884.5 107.5L1061 259.5H1077.5" stroke="#20FD2F" />
                             <path d="M374.5 111.5V78.5H676.5V92H821L884.5 127.5L872 148.5" stroke="#20FD2F" />
                             <path d="M374.5 111.5V78.5H676.5V92H821L954.5 178L946 190.5" stroke="#20FD2F" />
                             <path d="M374.5 111.5V78.5H676.5V92H821L968.5 187.5L959 200" stroke="#20FD2F" />
                             <path d="M374.5 111.5V78.5H676.5V92H821L980.5 196.5L973 207.5" stroke="#20FD2F" />
                             <path d="M374.5 111.5V78.5H676.5V92H821L994 206L986.5 216" stroke="#20FD2F" />
                             <path d="M374.5 111.5V78.5H676.5V92H821L1008.5 216L1001 224.5" stroke="#20FD2F" />
                             <path d="M374.5 111.5V78.5H676.5V92H821L870.5 120L859.5 138.5" stroke="#20FD2F" />
                             <path d="M374.5 111.5V78.5H676.5V92H821L857.5 112.5L845.5 130.5" stroke="#20FD2F" />
                             <path d="M374.5 111.5V78.5H676.5V92H821L841.5 106L831 122.5" stroke="#20FD2F" />
                             <path d="M374.5 111.5V78.5H676.5V92H821L828.5 96L817 114.5" stroke="#20FD2F" />
                             <path d="M375 111.5V78H677V91H819L879 111.5H901V83" stroke="#20FD2F" />
                             <path d="M375 111.5V78H677V91H819L879 111.5H918V87.5" stroke="#20FD2F" />
                             <path d="M375 111.5V78H677V91H819L879 111.5H933.5V88.5" stroke="#20FD2F" />
                             <path d="M375 111.5V78H677V91H819L879 111.5H949V91" stroke="#20FD2F" />
                             <path d="M375 111.5V78H677V91H819L879 111.5H966V91" stroke="#20FD2F" />
                             <path d="M374.5 110.5V79H545V63" stroke="#20FD2F" />
                             <path d="M374.5 111V79.1684H561.5V63" stroke="#20FD2F" />
                             <path d="M374.5 111V79.1684H578.5V63" stroke="#20FD2F" />
                             <path d="M374.5 111V79.1684H593.5V63" stroke="#20FD2F" />
                             <path d="M374.5 111V79.1684H611V91.5H730.5V63" stroke="#20FD2F" />
                             <path d="M374.5 111V79.1684H621.629V91.5H746.5V63" stroke="#20FD2F" />
                             <path d="M374.5 111V79.1684H631.594V91.5H761.5V63" stroke="#20FD2F" />
                             <path d="M374.5 111V79.1684H643.552V91.5H779.5V63" stroke="#20FD2F" />
                             <path d="M374.5 111V79.1684H654.181V91.5H795.5V63" stroke="#20FD2F" />
                             <path d="M374 110.5V45.5" stroke="#20FD2F" />
                             <path d="M374 110.5L391 45" stroke="#20FD2F" />
                             <path d="M373.998 110.503L374 78.9992L528.998 79.0026L528.998 60.0025" stroke="#20FD2F" />
                             <path d="M373.998 110.503L374 78.9992L528.998 79.0026L528.998 60.0025" stroke="#20FD2F" />
                             <path d="M373.998 110.503L374 78.9992L528.998 79.0026L528.998 60.0025" stroke="#20FD2F" />
                             <path d="M374 110.502L374.002 78.9991L529 79.0025L528.998 93.5" stroke="#20FD2F" />
                             <path d="M374 110.5L408 47" stroke="#20FD2F" />
                             <path d="M374 110.5L440 84.5L440 45" stroke="#20FD2F" />
                             <path d="M374 110.5L422.5 70.5L422.5 47" stroke="#20FD2F" />
                             <path d="M374 110.5V69.5H334.5V50" stroke="#20FD2F" />
                             <path d="M374 111V70H336V85" stroke="#20FD2F" />
                             <path d="M374 111V70H319V85" stroke="#20FD2F" />
                             <path d="M374 111V70H304V85" stroke="#20FD2F" />
                             <path d="M374 111V70H287V85" stroke="#20FD2F" />
                             <path d="M374 111V70H271V85" stroke="#20FD2F" />
                             <path d="M374 111V70H249V85" stroke="#20FD2F" />
                             <path d="M374 111V70H234V85" stroke="#20FD2F" />
                             <path d="M374 111V70H218V85" stroke="#20FD2F" />
                             <path d="M374 111V70H201V85" stroke="#20FD2F" />
                             <path d="M374 111V70H185V85" stroke="#20FD2F" />
                             <path d="M374 111V70L156 67V85" stroke="#20FD2F" />
                             <path d="M374 111V70L140 66V85" stroke="#20FD2F" />
                             <path d="M374 111V70L123 65.5V85" stroke="#20FD2F" />
                             <path d="M374 111V70L107 65.5V85" stroke="#20FD2F" />
                             <path d="M374 111V70L91 65V85" stroke="#20FD2F" />
                             <path d="M374 111V69.6612H319V50" stroke="#20FD2F" />
                             <path d="M374 111V69.6612H303V50" stroke="#20FD2F" />
                             <path d="M374 111V69.6612H288V50" stroke="#20FD2F" />
                             <path d="M374 111V69.6612H272V50" stroke="#20FD2F" />
                             <path d="M374 111V69.6612H250V39" stroke="#20FD2F" />
                             <path d="M374 111V69.6612H234V39" stroke="#20FD2F" />
                             <path d="M374 111V69.6612H218V39" stroke="#20FD2F" />
                             <path d="M374 111V69.6612H201V39" stroke="#20FD2F" />
                             <path d="M374 111V69.6612H185V39" stroke="#20FD2F" />
                             <path d="M374 111V69.6612L156 61V39" stroke="#20FD2F" />
                             <path d="M374 111V69.6612L140 61V39" stroke="#20FD2F" />
                             <path d="M374 111V69.6612L123 58.5V39" stroke="#20FD2F" />
                             <path d="M374 111V69.6612L107 59V39" stroke="#20FD2F" />
                             <path d="M374 111V69.6612L225 65.5L91 60.5V39" stroke="#20FD2F" />
                             <path d="M374 111V69.6612L225 65.5L54 57.5V21" stroke="#20FD2F" />
                             <path d="M374 111V69.6612L225 65.5L38.5 56.5V20.5" stroke="#20FD2F" />
                             <path d="M374 111V69.6612L225 65.5L61.5 56.5L21 44V21" stroke="#20FD2F" />
                             <path d="M374 111V69.6612L225 65.5L61.5 56.5L7.5 40.5V17.5" stroke="#20FD2F" />
                             <rect x="83.9844" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="100.211" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="116.445" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="132.672" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="148.898" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="178.117" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="194.344" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="210.578" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="226.805" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="243.039" y="22.291" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="83.9844" y="74.2256" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="100.211" y="74.2261" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="116.445" y="74.2261" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="132.672" y="74.2261" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="148.898" y="74.2261" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="178.117" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="194.344" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="210.578" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="226.805" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="243.039" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="264.133" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="280.359" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="296.594" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="312.82" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="329.055" y="79.0947" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="1094.33" y="99.3975" width="12.9836" height="25.1557"
                                 transform="rotate(90.0373 1094.33 99.3975)" fill="#A8CB8D" />
                             <rect x="1094.31" y="115.627" width="12.9836" height="25.1557"
                                 transform="rotate(90.0373 1094.31 115.627)" fill="#A8CB8D" />
                             <rect x="1094.3" y="131.856" width="12.9836" height="25.1557"
                                 transform="rotate(90.0373 1094.3 131.856)" fill="#A8CB8D" />
                             <rect x="1094.29" y="148.086" width="12.9836" height="25.1557"
                                 transform="rotate(90.0373 1094.29 148.086)" fill="#A8CB8D" />
                             <rect x="1094.28" y="164.315" width="12.9836" height="25.1557"
                                 transform="rotate(90.0373 1094.28 164.315)" fill="#A8CB8D" />
                             <rect x="1094.33" y="187.037" width="12.9836" height="25.1557"
                                 transform="rotate(90.0373 1094.33 187.037)" fill="#A8CB8D" />
                             <rect x="1094.31" y="203.267" width="12.9836" height="25.1557"
                                 transform="rotate(90.0373 1094.31 203.267)" fill="#A8CB8D" />
                             <rect x="1094.3" y="219.496" width="12.9836" height="25.1557"
                                 transform="rotate(90.0373 1094.3 219.496)" fill="#A8CB8D" />
                             <rect x="1094.29" y="235.726" width="12.9836" height="25.1557"
                                 transform="rotate(90.0373 1094.29 235.726)" fill="#A8CB8D" />
                             <rect x="1094.28" y="251.955" width="12.9836" height="25.1557"
                                 transform="rotate(90.0373 1094.28 251.955)" fill="#A8CB8D" />
                             <rect x="893.836" y="70.168" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="910.062" y="70.168" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="926.297" y="70.168" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="942.523" y="70.168" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="958.758" y="70.168" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="943" y="182" width="12.9836" height="25.1557"
                                 transform="rotate(33.8077 943 182)" fill="#A8CB8D" />
                             <rect x="956.484" y="191.031" width="12.9836" height="25.1557"
                                 transform="rotate(33.8077 956.484 191.031)" fill="#A8CB8D" />
                             <rect x="969.969" y="200.061" width="12.9836" height="25.1557"
                                 transform="rotate(33.8077 969.969 200.061)" fill="#A8CB8D" />
                             <rect x="983.453" y="209.091" width="12.9836" height="25.1557"
                                 transform="rotate(33.8077 983.453 209.091)" fill="#A8CB8D" />
                             <rect x="996.938" y="218.121" width="12.9836" height="25.1557"
                                 transform="rotate(33.8077 996.938 218.121)" fill="#A8CB8D" />
                             <rect x="813.969" y="106.683" width="12.9836" height="25.1557"
                                 transform="rotate(30.1533 813.969 106.683)" fill="#A8CB8D" />
                             <rect x="828" y="114.836" width="12.9836" height="25.1557"
                                 transform="rotate(30.1533 828 114.836)" fill="#A8CB8D" />
                             <rect x="842.031" y="122.988" width="12.9836" height="25.1557"
                                 transform="rotate(30.1533 842.031 122.988)" fill="#A8CB8D" />
                             <rect x="856.07" y="131.141" width="12.9836" height="25.1557"
                                 transform="rotate(30.1533 856.07 131.141)" fill="#A8CB8D" />
                             <rect x="870.102" y="139.293" width="12.9836" height="25.1557"
                                 transform="rotate(30.1533 870.102 139.293)" fill="#A8CB8D" />
                             <rect x="723.43" y="52.3154" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="739.656" y="52.3154" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="755.891" y="52.3154" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="772.117" y="52.3154" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="788.344" y="52.3154" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="264.133" y="32.0283" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="280.359" y="32.0283" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="296.594" y="32.0283" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="312.82" y="32.0283" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="329.055" y="32.0283" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="367.195" y="27.1602" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="383.422" y="27.1602" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="399.656" y="27.1602" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="415.883" y="27.1602" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="432.117" y="27.1602" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="522.188" y="45.0127" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="538.414" y="45.0127" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="554.648" y="45.0127" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="570.875" y="45.0127" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="587.102" y="45.0127" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="522.188" y="86.3975" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="538.414" y="86.3975" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="554.648" y="86.3975" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="570.875" y="86.3975" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="587.109" y="86.3975" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="15.9844" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="31.9688" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <rect x="47.9531" width="12.9836" height="25.1557" fill="#A8CB8D" />
                             <text x="90.4762" y="34.8689" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C1</text>
                             <text x="106.7028" y="34.8689" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C2</text>
                             <text x="122.9368" y="34.8689" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C3</text>
                             <text x="139.1630" y="34.8689" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C4</text>
                             <text x="155.3890" y="34.8689" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C5</text>
                             <text x="184.6090" y="34.8689" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C6</text>
                             <text x="200.8350" y="34.8689" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C7</text>
                             <text x="217.0690" y="34.8689" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C8</text>
                             <text x="233.2970" y="34.8689" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C9</text>
                             <text x="249.5310" y="34.8689" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C10</text>

                             <text x="90.4762" y="86.8040" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C11</text>
                             <text x="106.7028" y="86.8040" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C12</text>
                             <text x="122.9368" y="86.8040" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C13</text>
                             <text x="139.1630" y="86.8040" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C14</text>
                             <text x="155.3890" y="86.8040" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C15</text>

                             <text x="184.6090" y="91.6736" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C16</text>
                             <text x="200.8350" y="91.6736" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C17</text>
                             <text x="217.0690" y="91.6736" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C18</text>
                             <text x="233.2970" y="91.6736" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C19</text>
                             <text x="249.5310" y="91.6736" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C20</text>

                             <text x="270.625" y="91.6736" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C21</text>
                             <text x="286.851" y="91.6736" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C22</text>
                             <text x="303.086" y="91.6736" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C23</text>
                             <text x="319.312" y="91.6736" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C24</text>
                             <text x="335.547" y="91.6736" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C25</text>

                             <text x="1106.90" y="112.884" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C26</text>
                             <text x="1106.88" y="129.113" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C27</text>
                             <text x="1106.87" y="145.343" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C28</text>
                             <text x="1106.86" y="161.572" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C29</text>
                             <text x="1106.85" y="177.801" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C30</text>

                             <text x="1106.90" y="200.522" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C31</text>
                             <text x="1106.88" y="216.752" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C32</text>
                             <text x="1106.87" y="232.981" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C33</text>
                             <text x="1106.86" y="249.210" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C34</text>
                             <text x="1106.85" y="265.439" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C35</text>

                             <text x="900.328" y="82.745" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C36</text>
                             <text x="916.554" y="82.745" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C37</text>
                             <text x="932.789" y="82.745" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C38</text>
                             <text x="949.015" y="82.745" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C39</text>
                             <text x="965.250" y="82.745" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C40</text>
                             {{-- x-5 y+4 --}}
                             <text x="815.460" y="123.261" transform="rotate(30.1533 820.460 119.261)"
                                 text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">C41</text>

                             <text x="829.492" y="131.414" transform="rotate(30.1533 834.492 127.414)"
                                 text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">C42</text>

                             <text x="843.523" y="139.566" transform="rotate(30.1533 848.523 135.566)"
                                 text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">C43</text>

                             <text x="857.562" y="147.719" transform="rotate(30.1533 862.562 143.719)"
                                 text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">C44</text>

                             <text x="871.594" y="155.871" transform="rotate(30.1533 876.594 151.871)"
                                 text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">C45</text>

                             <text x="944.492" y="198.578" transform="rotate(33.8077 949.492 194.578)"
                                 text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">C46</text>

                             <text x="957.976" y="207.609" transform="rotate(33.8077 962.976 203.609)"
                                 text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">C47</text>

                             <text x="971.460" y="216.639" transform="rotate(33.8077 976.460 212.639)"
                                 text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">C48</text>

                             <text x="984.945" y="225.669" transform="rotate(33.8077 989.945 221.669)"
                                 text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">C49</text>

                             <text x="998.429" y="234.699" transform="rotate(33.8077 1003.429 230.699)"
                                 text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">C50</text>





                             <text x="729.92" y="64.89" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C51</text>
                             <text x="746.15" y="64.89" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C52</text>
                             <text x="762.38" y="64.89" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C53</text>
                             <text x="778.61" y="64.89" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C54</text>
                             <text x="794.85" y="64.89" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C55</text>

                             <text x="270.625" y="44.606" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C56</text>
                             <text x="286.851" y="44.606" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C57</text>
                             <text x="303.086" y="44.606" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C58</text>
                             <text x="319.312" y="44.606" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C59</text>
                             <text x="335.547" y="44.606" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C60</text>

                             <text x="373.687" y="39.738" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C61</text>
                             <text x="389.914" y="39.738" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C62</text>
                             <text x="406.148" y="39.738" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C63</text>
                             <text x="422.375" y="39.738" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C64</text>
                             <text x="438.609" y="39.738" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C65</text>

                             <text x="528.68" y="57.59" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C66</text>
                             <text x="544.91" y="57.59" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C67</text>
                             <text x="561.14" y="57.59" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C68</text>
                             <text x="577.36" y="57.59" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C69</text>
                             <text x="593.59" y="57.59" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C70</text>

                             <text x="528.68" y="98.97" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C71</text>
                             <text x="544.91" y="98.97" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C72</text>
                             <text x="561.14" y="98.97" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C73</text>
                             <text x="577.36" y="98.97" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C74</text>
                             <text x="593.60" y="98.97" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C75</text>

                             <text x="6.49" y="12.58" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">C76</text>
                             <text x="22.48" y="12.58" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">C77</text>
                             <text x="38.46" y="12.58" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">C78</text>
                             <text x="54.44" y="12.58" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">C79</text>

                             <text x="1082.33" y="105.3975" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C80</text>
                             <text x="1082.31" y="121.627" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C81</text>
                             <text x="1082.3" y="137.856" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C82</text>
                             <text x="1082.29" y="154.086" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C83</text>
                             <text x="1082.28" y="170.315" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C84</text>
                             <text x="1082.33" y="193.037" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C85</text>
                             <text x="1082.31" y="209.267" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C86</text>
                             <text x="1082.3" y="225.496" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C87</text>
                             <text x="1082.29" y="241.726" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C88</text>
                             <text x="1082.28" y="257.955" text-anchor="middle" dominant-baseline="middle"
                                 font-size="5" fill="black">C89</text>


                         </svg>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Ambil semua path dan rect di dalam SVG (yang bisa diklik)
    const clickable = document.querySelectorAll('svg path, svg rect');

    clickable.forEach(function (el) {
      el.addEventListener('click', function () {
        const current = el.getAttribute('data-rect') || '';
        const value = prompt('Isi nilai "data-rect" untuk elemen ini:', current);

        if (value !== null && value.trim() !== '') {
          el.setAttribute('data-rect', value.trim());
          console.log('Set data-rect="' + value.trim() + '" pada elemen:', el);
        }
      });
    });
  });
</script>

<script>
// KONFIRMASI SEBELUM REFRESH / RELOAD / CLOSE
window.addEventListener("beforeunload", function (e) {
    e.preventDefault();
    e.returnValue = ""; 
});
</script>

</body>
</html>
