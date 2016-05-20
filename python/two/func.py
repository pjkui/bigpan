#!/usr/bin/env python3
# -*- coding: utf-8 -*-
#定义一个关键字参数的函数    函数内部自动把关键字参数组装成dict
def reg (name,sex,**infos):
    print('姓名:',name,'性别:',sex,'其他信息:',infos)

reg('小米','男',city='北京',inc='奇虎')