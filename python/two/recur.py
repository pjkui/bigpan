#!/usr/bin/env/python3
# -*- coding: utf-8 -*-
#python中的递归函数

def digui(nu):
    if nu==1:
        return nu
    return nu*digui(nu-1)

aa = input()
print(digui(int(aa)))


