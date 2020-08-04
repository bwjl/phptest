<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/8/4 上午11:39
 * Description:
 */


$json = '[
  {
    "organizationId": 76,
    "organizationName": "武汉硕方公司",
    "employeeId": 649,
    "employeeName": "熊大06",
    "organizationParentId": 1
  },
  {
    "organizationId": 152,
    "organizationName": "熊大部门01",
    "employeeId": 649,
    "employeeName": "熊大06",
    "organizationParentId": 143
  },
  {
    "organizationId": 155,
    "organizationName": "熊大公司02部门01",
    "employeeId": 649,
    "employeeName": "熊大06",
    "organizationParentId": 146
  },
  {
    "organizationId": 151,
    "organizationName": "熊大公司07",
    "employeeId": 649,
    "employeeName": "熊大06",
    "organizationParentId": 1
  }
]';

var_dump(json_decode($json, true));

$json = '[]';
var_dump(json_decode($json, true));
