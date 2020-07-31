<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/7/31 上午11:47
 * Description:
 */

$json = "{
    \"id\":7898,
    \"title\":\"爱墨黑标纸13*13-12\",
    \"categoryId\":285,
    \"spuCode\":\"A2E881882\",
    \"brandId\":21,
    \"createTime\":1592900555000,
    \"creatorId\":1,
    \"creator\":\"超级管理员\",
    \"remark\":null,
    \"baseAttributes\":[
        {
            \"attrId\":2,
            \"name\":\"适配型号\",
            \"optional\":true,
            \"elementType\":3,
            \"value\":\"D11\"
        },
        {
            \"attrId\":4,
            \"name\":\"耗材材质\",
            \"optional\":true,
            \"elementType\":1,
            \"valueId\":1079,
            \"value\":\"热敏纸\"
        },
        {
            \"attrId\":5,
            \"name\":\"适用行业\",
            \"optional\":false,
            \"elementType\":2,
            \"valueIds\":[
                1108,
                1110
            ],
            \"values\":[
                \"通信电力\",
                \"医药\"
            ]
        }
    ],
    \"artifactAttributes\":[
        {
            \"attrId\":6,
            \"name\":\"宽度(mm)\",
            \"optional\":true,
            \"elementType\":3,
            \"value\":\"12\"
        },
        {
            \"attrId\":7,
            \"name\":\"高度(mm)\",
            \"optional\":true,
            \"elementType\":3,
            \"value\":\"12\"
        },
        {
            \"attrId\":10,
            \"name\":\"张数(卷/张)\",
            \"optional\":true,
            \"elementType\":3,
            \"value\":\"11\"
        },
        {
            \"attrId\":13,
            \"name\":\"排数\",
            \"optional\":true,
            \"elementType\":1,
            \"valueId\":1802,
            \"value\":\"单排\"
        },
        {
            \"attrId\":14,
            \"name\":\"黑标高度(mm)\",
            \"optional\":true,
            \"elementType\":3,
            \"value\":\"14\"
        },
        {
            \"attrId\":15,
            \"name\":\"间距(mm)\",
            \"optional\":true,
            \"elementType\":3,
            \"valueId\":1819,
            \"value\":\"6.0\"
        },
        {
            \"attrId\":16,
            \"name\":\"孔\",
            \"optional\":true,
            \"elementType\":1,
            \"valueId\":1824,
            \"value\":\"双孔\"
        },
        {
            \"attrId\":17,
            \"name\":\"生产类型\",
            \"optional\":true,
            \"elementType\":1,
            \"valueId\":1829,
            \"value\":\"常备款\"
        },
        {
            \"attrId\":20,
            \"name\":\"开发程度\",
            \"optional\":true,
            \"elementType\":1,
            \"valueId\":771,
            \"value\":\"OEM\"
        }
    ],
    \"accessories\":[

    ],
    \"measurementUnit\":\"s4354\",
    \"saleUnit\":\"s5752\",
    \"compositeUnit\":[

    ],
    \"tags\":[

    ]
}";

$array = json_decode($json, true);

var_dump($array);


$a = array_column([$array], 'attributes', 'techAttributes', 'baseAttributes', 'artifactAttributes');

var_dump($a);