#!/usr/bin/env python3
# -*- coding: utf-8 -*-
#参数组合
def some_params_func(bixuan,kexuan = '可选',*kebian,gjz_one,gjz_two,**kv):
    print('必选参数',bixuan,kexuan,kebian,gjz_one,gjz_two,kv)


some_params_func('唯一的必选',('dff','oo'),gjz_one='dsf',gjz_two='sdfds')