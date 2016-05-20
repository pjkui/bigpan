#!/usr/bin/env python3
# -*- coding: utf-8 -*-
#定义一个关键字参数的函数    函数内部自动把关键字参数组装成dict
def reg (name,sex,**infos):
    print('姓名:',name,'性别:',sex,'其他信息:',infos)
map = {'lamg':'C++','IDC':'阿里云','domain':'云'}

reg('小米','男',map)

# 如果直接传一个dict进函数   会报错

# Traceback (most recent call last):
#   File "D:/pystudy/study/bigpan/python/two/func.py", line 7, in <module>
#     reg('小米','男',map)
# TypeError: reg() takes 2 positional arguments but 3 were given