<?php

/**
 * 九型人格测试（144题评定版开源代码）
 * 
 * 【版权声明】
 * 禁止用于商业用途，如需作商业用途，请务必与素材资源的原作者联系，否则责任自负。
 * 
 * @author: yixzm
 * @mail:   dream@yixzm.cn
 * @site:   http://www.yixzm.cn
 * @blog:
 * 
 * 源码讲解：https://blog.csdn.net/dreamstone_xiaoqw/article/details/90046498
 * 原版说明：https://blog.csdn.net/dreamstone_xiaoqw/article/details/83903609
 */
$answer = array(
    array('E', 'B'),
    /** 1 */
    array('G', 'A'),
    /** 2 */
    array('C', 'E'),
    /** 3 */
    array('H', 'I'),
    /** 4 */
    array('F', 'E'),
    /** 5 */
    array('B', 'A'),
    /** 6 */
    array('G', 'D'),
    /** 7 */
    array('E', 'G'),
    /** 8 */
    array('C', 'I'),
    /** 9 */
    array('E', 'A'),
    /** 10 */
    array('H', 'G'),
    /** 11 */
    array('B', 'D'),
    /** 12 */
    array('F', 'C'),
    /** 13 */
    array('E', 'I'),
    /** 14 */
    array('H', 'D'),
    /** 15 */
    array('B', 'G'),
    /** 16 */
    array('A', 'F'),
    /** 17 */
    array('C', 'E'),
    /** 18 */
    array('B', 'I'),
    /** 19 */
    array('F', 'D'),
    /** 20 */
    array('G', 'C'),
    /** 21 */
    array('H', 'A'),
    /** 22 */
    array('B', 'F'),
    /** 23 */
    array('I', 'G'),
    /** 24 */
    array('E', 'D'),
    /** 25 */
    array('A', 'I'),
    /** 26 */
    array('B', 'C'),
    /** 27 */
    array('H', 'E'),
    /** 28 */
    array('G', 'F'),
    /** 29 */
    array('I', 'D'),
    /** 30 */
    array('A', 'C'),
    /** 31 */
    array('H', 'B'),
    /** 32 */
    array('E', 'G'),
    /** 33 */
    array('A', 'D'),
    /** 34 */
    array('I', 'G'),
    /** 35 */
    array('C', 'H'),
    /** 36 */
    array('B', 'E'),
    /** 37 */
    array('A', 'G'),
    /** 38 */
    array('C', 'D'),
    /** 39 */
    array('H', 'I'),
    /** 40 */
    array('F', 'E'),
    /** 41 */
    array('B', 'A'),
    /** 42 */
    array('G', 'D'),
    /** 43 */
    array('H', 'F'),
    /** 44 */
    array('I', 'C'),
    /** 45 */
    array('E', 'E'),
    /** 46 */
    array('H', 'I'),
    /** 47 */
    array('B', 'D'),
    /** 48 */
    array('F', 'C'),
    /** 49 */
    array('E', 'I'),
    /** 50 */
    array('D', 'H'),
    /** 51 */
    array('B', 'G'),
    /** 52 */
    array('F', 'A'),
    /** 53 */
    array('C', 'E'),
    /** 54 */
    array('B', 'I'),
    /** 55 */
    array('F', 'D'),
    /** 56 */
    array('G', 'C'),
    /** 57 */
    array('H', 'A'),
    /** 58 */
    array('E', 'B'),
    /** 59 */
    array('G', 'I'),
    /** 60 */
    array('D', 'E'),
    /** 61 */
    array('I', 'A'),
    /** 62 */
    array('B', 'C'),
    /** 63 */
    array('E', 'H'),
    /** 64 */
    array('F', 'G'),
    /** 65 */
    array('D', 'I'),
    /** 66 */
    array('C', 'A'),
    /** 67 */
    array('G', 'B'),
    /** 68 */
    array('E', 'G'),
    /** 69 */
    array('A', 'D'),
    /** 70 */
    array('I', 'F'),
    /** 71 */
    array('C', 'H'),
    /** 72 */
    array('D', 'B'),
    /** 73 */
    array('F', 'A'),
    /** 74 */
    array('D', 'B'),
    /** 75 */
    array('I', 'G'),
    /** 76 */
    array('E', 'F'),
    /** 77 */
    array('B', 'A'),
    /** 78 */
    array('F', 'D'),
    /** 79 */
    array('H', 'F'),
    /** 80 */
    array('C', 'I'),
    /** 81 */
    array('E', 'A'),
    /** 82 */
    array('H', 'G'),
    /** 83 */
    array('B', 'D'),
    /** 84 */
    array('F', 'C'),
    /** 85 */
    array('E', 'I'),
    /** 86 */
    array('H', 'I'),
    /** 87 */
    array('B', 'G'),
    /** 88 */
    array('F', 'A'),
    /** 89 */
    array('C', 'E'),
    /** 90 */
    array('B', 'I'),
    /** 91 */
    array('F', 'D'),
    /** 92 */
    array('G', 'C'),
    /** 93 */
    array('H', 'A'),
    /** 94 */
    array('E', 'B'),
    /** 95 */
    array('G', 'I'),
    /** 96 */
    array('E', 'D'),
    /** 97 */
    array('I', 'A'),
    /** 98 */
    array('C', 'B'),
    /** 99 */
    array('E', 'H'),
    /** 100 */
    array('F', 'G'),
    /** 101 */
    array('I', 'D'),
    /** 102 */
    array('D', 'A'),
    /** 103 */
    array('H', 'B'),
    /** 104 */
    array('G', 'E'),
    /** 105 */
    array('D', 'A'),
    /** 106 */
    array('F', 'I'),
    /** 107 */
    array('C', 'H'),
    /** 108 */
    array('B', 'E'),
    /** 109 */
    array('G', 'A'),
    /** 110 */
    array('C', 'D'),
    /** 111 */
    array('H', 'I'),
    /** 112 */
    array('F', 'E'),
    /** 113 */
    array('A', 'B'),
    /** 114 */
    array('G', 'D'),
    /** 115 */
    array('F', 'H'),
    /** 116 */
    array('C', 'I'),
    /** 117 */
    array('E', 'A'),
    /** 118 */
    array('H', 'G'),
    /** 119 */
    array('B', 'D'),
    /** 120 */
    array('F', 'C'),
    /** 121 */
    array('D', 'I'),
    /** 122 */
    array('H', 'D'),
    /** 123 */
    array('B', 'G'),
    /** 124 */
    array('A', 'F'),
    /** 125 */
    array('E', 'C'),
    /** 126 */
    array('I', 'B'),
    /** 127 */
    array('F', 'D'),
    /** 128 */
    array('G', 'C'),
    /** 129 */
    array('H', 'A'),
    /** 130 */
    array('F', 'B'),
    /** 131 */
    array('G', 'I'),
    /** 132 */
    array('E', 'D'),
    /** 133 */
    array('A', 'I'),
    /** 134 */
    array('C', 'B'),
    /** 135 */
    array('H', 'E'),
    /** 136 */
    array('G', 'F'),
    /** 137 */
    array('D', 'I'),
    /** 138 */
    array('C', 'A'),
    /** 139 */
    array('B', 'H'),
    /** 140 */
    array('G', 'E'),
    /** 141 */
    array('A', 'D'),
    /** 142 */
    array('F', 'I'),
    /** 143 */
    array('H', 'C'),
    /** 144 */
);
