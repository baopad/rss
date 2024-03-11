clash rules editor


rules:
  - RULE-SET,direct,DIRECT
  - RULE-SET,relay,snap.linkpc.net
  - RULE-SET,proxy,Balance
  - RULE-SET,reject,REJECT
  - geosite,cn,snap.linkpc.net
  - geoip,cn,snap.linkpc.net
  - MATCH,Balance
rule-providers:
  direct:
    type: http
    behavior: classical
    url: "https://rss.paotung.org/vpn/clash/rules/direct.yaml"
    path: ./rules/direct.yaml
    interval: 123456
  relay:
    type: http
    behavior: classical
    url: "https://rss.paotung.org/vpn/clash/rules/domestic.yaml"
    path: ./rules/relay.yaml
    interval: 123456
  proxy:
    type: http
    behavior: classical
    url: "https://rss.paotung.org/vpn/clash/rules/proxy.yaml"
    path: ./rules/proxy.yaml
    interval: 123456
  reject:
    type: http
    behavior: classical
    url: "https://rss.paotung.org/vpn/clash/rules/reject.yaml"
    path: ./rules/reject.yaml
    interval: 123456
