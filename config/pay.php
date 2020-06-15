<?php

return [
    'alipay' => [
        'app_id'         => '2016102800772674',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgPDPU/5oEagcyuqR1yDF1S9YskXVOWrToo/OkQJBw0JpxZLHb9VnBYLsySu2k0FB59ixGhCqgr6cRmd44kNJL8tGzpZxFVfiCqkvIkeU+s4IUpo/rTWemyuZKPZHuI6M8jeJnuwn6vS01yXtIcNG+/2n5OMgcrEVKiDCtQjadbtnn6DjLcJLcWcFcTeApk7bxrSCcnc+IqkcnuyuFiUcZybA40+uIZTYYhMpri56OTVpVszLz7Ufgl/NtuVoMO91B0sI92N+m5j2eM4s+oU4ea5TwN2JaIiUstAVQu64HI/Xpp/o6a261urdypNldu2+U6Tg4ZDZJPXTnveQFpWw8wIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAw8cKBXwzPrHjnUKjvv9b7TPMzzmQeo7l4jZzBpGqvB6btVF5M/ofI/S8Ry770OFo7DiRiMCl7D6fk3frXkxPj6nsX4uiWO0SsU/DFjjSnQDo6L7cPS8V/XgD26uYaKcIzpdVHAs2Kuth0EBhpdEl2a+qPCtE21SRKWPJd8rMo4FgHB0Hoedfr0f+vUQ/PGGOQhUh1hNMKX6CrpYBxU6HYTssfj2NtlabI8SRlce08DnSVzmgDXgWXyZmhJX1JB1cjZVEvzz5eVha1CUEQfJkVCl1pHb+OCCSKcaX4/Nl54S/MiBZ9KKY0CzTSnXJSRfwagbHCHS4Z2/s0qdOKLhFBQIDAQABAoIBAF/u/pglfi7wmGqNJxQGqZMYWPoKaSPFNhydNcw4QQOhtAcrf0ra+7twx3nSKg73BaULKzVpwWR8Y1Gt56XzmuD5ERzYnZsZwJkmTqBrA7lvorG6JM3ObuYfkzRnZ22QvB4PxeLSE58AbJPRmIfabsO28qI9SaZ4UBGKFkUfGRvdBBw05I/egLMHYrozTRk+4z1S+AbGOoaDIcTptq5Dw2h3mDez5hYRdRLv7SpLfLyz6hSreRF+AmDLWGkQa7Pndn9o6sKGocFk3rIuMnieuv6//TngEMxt8ev5Ziq+5tgr/DcGXHIWvfGqjpZ0tRgTc5RU42Vj/Sda3YgIg/QBPYECgYEA6KsmIepd88J7NvXwQc/S6ZhTYz8r2q6pquvOoX76a0rPpVdmZ/HsfmJyOrf5U8yUnnmNF+J9qePHmgjFw96Ou0vQ7OymftwTY9Sk5nzXNtsy4qV5Cd9wENB/eIwwZPDK5xq58V82oMotil9o4XfVkbjMMiQKytddHDzUynplzdUCgYEA12jbeAmer26oGNZQgQPPevhOq/AexZMFHdjI2JkmYyDvPsZyZ3QYpj8Gm7kt702icCyk6cO0nAi5lfBNuR8DXOKvthE7xp2JEs+BGX2bda70eErS0p9kQxdXlzPhicu0X1yGcVEku/530DxqCIrlxkbqdAf0wc3OMCxr41oZwnECgYEAqu8ycLBSngc/pr1A6djZRyzV9pAuk9bGaAAeKp+zMqgfrYVsgulFqgSBj4oh7uLaPSNn+Sg40lu6BPx07tXPXuLwd1/VYlYlGK7dB0iohHC+Da0sI4i4OGI1hEbaNw6AwxDrkt00sSRYGNTHpP35NbniquO32hYnHdvDKY6KxJECgYAQLzSuJCrkC3BdzVxnFR41owpmKLhnJ9CumWcdvwP/Vq4jDU3zL+naM8oPUS5+WFroCrKpTab4Qj+PYGq2ifn6tJ13FHxlQ9jUrPqKK8HOacK8dwK4CHnEALD4D1HWxJNcxtrjELGt3kSqRJ/C3Iy/BP0Aksh09z2SqQPCJTbiQQKBgQCj3rvSND7QnuG2RM/rEAzzEZd6tcKTLDTAvqLENZPsxrxW4OoDMIM8QmjHxAqMhQdiOuNYHQzPt4Hnt2XJVd501MBXW5Yv3KnhCFxB9GEEBTNuvM4LJTJZ4bGNeMLGx/q/55Qpk/0M9AT9+XUJ34LJ+bbcDX3Pr7PGBXYvjtHWrA==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
