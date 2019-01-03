<?php

return [
    'alipay' => [
        'app_id'         => '2016092500592990',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA8ICppLiuPmqtNeXN2KFVyyjgyefGpkOdWlXozUyFrh7s6/MGpUsHYh8wcEpHQki6RJn2vksgZd4RGtUbuV/R09PmnTGmTTwb1WTWobIQdjwpcZd697M9OESSXOvCF/KU2aDiZ2IjU5QXJ7fwaNgksdozc5vqYSwmtemcGSqXGhEdEvoktLPOAvGkYCqSQIkgruKeEamvcxN+KxlQMlCrWMS7WzJl7sSNAfbf1MlUFgnqdRqpCBrh46cfiXE46thJXzWFvyAy+q8A4L/AIGy1h/fVJTonkFZSYRdSzEJPTxQXEZLpZIH7C4HjcGaSCRbUI9EHEi6dIKynXm4DUxZj+QIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEArr96irruhGjtvgRxa1+yuIxBWVEowimBjGTfTfivm2eRhSJHMRmyc4ldNtMDkiMTHWyVmH1ddm7MCT7zXsGjwqQcVhBHphEwLngCJ08NPBuRJmLH7qYw4RPZWDpTGnMdkNHiSRLEMx5TK5ErlRHgzx+1+5JlGrRedHSCuwkEz1ZDkrH6o3fYycvlD3r9tsDyXztEmi3AZH1TJw9PPHdEMmYjQy50wjtPG3n2bQhXCChjRpfvOFLnJtHWu9Kw0d3P3MMhZHv2ggGBqTONwBxlBRb/lIU+1C4YsUWfs81kjCIhIRrYwunp0EoTdFdHNqXZrhk6qZ19mQNu8yKfOCVfpwIDAQABAoIBAHjYvlv2TkCPd+oylGUW9zec9wxXjgJIRejbUXpQgtDL3NzfCbCw/rHbyvTBFPUZAH0WvJWKDPp8QOob+J4M970BVP9HnuT/efyIzaR1jMeGoOiU44Lst1zQJzxWiWX/OfEO1JiIO9rGG+pDKIqcpIVYfreNVBIVrkSG1mmWIRdogY4/T9AIGhvLaAwiwviRwzfNcIbZ+zjWe3Wv6b31658+wDiC7R5eKUj6Pdk+Aqr3VJ2Zj7C88qrPIiPVD68cQyYKNn7JyUdivo0LeapMQGSzeIlbW6iI41GicvNTzBhxo7FWXqQonutWouM73q31WZeTaYCeoSbRS3Y+ADGObPECgYEA4VQrA3kH+XR77SBjeh9xcBSbMGenX2FBWv5Mp1KH5TXY0ZLOXhcL+cMWki8wmlYD3We6REaTArEZlxwIDAvIdnnMt5kaxJoQ2uEPWKV7+FYBtSv79IAJr0VeL2Gmqav/vmsbffplULCT7fXhNbx0BlXZaar/NJwxDu0cTMRe/YMCgYEAxojEDDc23gMYkbXkD76kc6z769II7Q5i0WA4eZX0mpgKgOcufz+bshNPZC08rP+4AcJFt3LHlsiPss1m3y2QTbn2wqxSof+7NL2IkMHjwBtAjQtZMYs2NI9mff3Qva0Bf9n9Ox1uEOILRIQgw/s0nlKsmY9xwPygkLdJvWFbgA0CgYEAlaW1j2/hOO4Ao+J/zop1Zy94RbSBdxn7MrhzJijssfCKF919CwYZYP4Mzndiuw1nMbMDBPcuCXqe+TmXqpBkyTJpIIIhQfLkQMl5zLDS3YIZTj5w7dffFrVmMOeUrVja15cAwjD6+pTbGg3TTUHkeJSpeMElDsaw2i3lPqKoR4sCgYEAtkBiyFv/cDsjWM/C9nkp+k64TLlZHFTyfgZ4kZUJIMmmCsMuuf2obgawAOROKPnu7x5qZYdmlZKz544Le6EWMWQflIIgsTpTnozHSyvSaU4bKd9bF9IWBpYFnm9cKmMhVz7D6nqPycvYUCOC+KYonZaDf8xgvqqqs26usL0pBBkCgYA5haCHT/E3M4RRuTWMqn/RF2zNZqHorfwq5m9CgtAWE8bHJwrNffY94e7BJJkkA8Hr1/XxvXdwv0RWaNAt8TWYzXGdoFapsEXfeSHfKM7r9/muA5+1bJvtybyM9Jc0aP9Wv3VU3/OGhvwAOuZzAziWjl64A/wepVfHkO71IEQarg==',
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
