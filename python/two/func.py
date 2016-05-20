#!/usr/bin/env python3
# -*- coding: utf-8 -*-
def add_end (info = None):
    if info is None:
        info = []
    info.append('END')
    return info
#第一次调用
r = add_end()
#第二次调用
r = add_end()
#第三次调用
r = add_end()
print(r)

# Python函数在定义的时候，默认参数L的值就被计算出来了，即[]，因为默认参数L也是一个变量，它指向对象[]，每次调用该函数，如果改变了L的内容，则下次调用时，默认参数的内容就变了，不再是函数定义时的[]了。
#
# 所以，定义默认参数要牢记一点：默认参数必须指向不变对象！