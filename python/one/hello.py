#!/usr/bin/env python3
# -*- coding: utf-8 -*-
#python
arr = ['php','python','golang',['nginx','apache','httpd']]
#往后面追加一个
arr.append('java')
#指定位置插入一个
arr.insert(-3,'c++')
#删除一个元素\
arr.pop(2)
#print(len(arr))
print(arr[3][1])