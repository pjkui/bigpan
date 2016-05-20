#!/usr/bin/env python3
# -*- coding: utf-8 -*-
#定义一个关键字参数的函数    函数内部自动把关键字参数组装成dict
def reg (name,sex,**infos):
    print('姓名:',name,'性别:',sex,'其他信息:',infos)
map = {'lamg':'C++','IDC':'阿里云','domain':'云'}

reg('小米','男',**map)

# **extra表示把extra这个dict的所有key-value用关键字参数传入到函数的**kw参数，
# kw将获得一个dict，注意kw获得的dict是extra的一份拷贝，对kw的改动不会影响到函数外的extra。