#!/usr/bin/env python3
# -*- coding: utf-8 -*-
#对list进行切片操作
my_list = ['php','python','java','C','swift','golang']
#从索引0开始取到索引3
#print(my_list[0:3])
#取最后两个
#print(my_list[-2:])
num_list = list(range(0,100))
#每5个取一个
print(num_list[::5])

#字符串的切片

print('abcdefghijkmnop'[0:7:2])