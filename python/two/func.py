#!/usr/bin/env python3
# -*- coding: utf-8 -*-
#限制关键字参数的名字
def reg (name,sex,*,city='上海',domain):
    print('姓名:',name,'性别:',sex,'其他信息:','city',city,'domain',domain)

reg('小米','男',domain='www.google.com')
