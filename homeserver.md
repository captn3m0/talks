---
inlineSVG: true
---

# <!--fit--><!-- _class: lead -->The Home Server Talk

\- _nemo_

---

# about me

- Nemo
- [@captn3m0](https://twitter.com/captn3m0)
- [@razorpay](https://razorpay.com) (:money_with_wings: :credit_card:)

---

# agenda

1.  the hardware
2.  the software
3.  the alternatives
4.  the CTA

---

# motivation?

1.  owning your data
2.  de-googling
3.  backing up your data locally
4.  learning/experimenting with tech
5.  playing mario

---

# time?

_<5 hr a month_

---

# <!-- _class: lead --> ![drop-shadow](./images/sideproject.jpg)

---

![bg vertical](https://fakeimg.pl/1920x800/C4E538/fff/?text=hardware)
![bg](https://fakeimg.pl/1920x800/A3CB38/fff/?text=software)
![bg](https://fakeimg.pl/1920x800/009432/fff/?text=glue)

---

# Raspberry Pi 3

- :memo: 1GB RAM
- :globe_with_meridians: Wireless/BLE/Ethernet
- :chains: 4 USB ports
- :musical_note: Audio/HDMI/Composite VGA
- :zap: 2.5A
- :money_with_wings: ~3k INR
- :camera:, GPIO

![bg right](https://cdn.shopify.com/s/files/1/0176/3274/products/Kit-game_1024x1024.jpg)

---

# A VM on the :cloud:

- Scaleway: 4ARMv8/2GB/50GB - 300 INR
- AWS Lightsail: 1vCPU/512MB/20GB - 250 INR
- Digital Ocean: 1vCPU/1GB/25GB - 350 INR

_Beware of Persistent Storage cost_

---

# Other Alternatives

![bg right](http://www.thebookpc.com/v/vspfiles/photos/RV-NUC-I3-LINUX-2.jpg)

1.  Intel NUCs
2.  [Hetzner Server Auctions](https://www.hetzner.com/sb) (20-50USD/mo).
3.  NAS/Network device.
4.  Gamer? [`r/pcmasterrace/wiki`](https://www.reddit.com/r/pcmasterrace/wiki/builds)

<!-- _TODO: better image_ -->

---

# system76 Meerak

![bg](https://d1vhcvzji58n1j.cloudfront.net/assets/products/meer4/hero_wide-7cf0ee6536_2560.jpg)

<!-- TODO: Fix header -->

---

# my build

- TODO

---

# software

1.  docker
2.  kubernetes
3.  ansible/puppet/chef
4.  [tool-of-your-choice](https://docs.google.com/spreadsheets/d/1FCgqz1Ci7_VCz_wdh8vBitZ3giBtac_H8SBw4uxnrsE/edit#gid=0)

---

# software

1.  docker **\***
2.  kubernetes
3.  ansible/puppet/chef
4.  helm?

---

# containers?

- secure
- declarative configuration
- orchestration is 100x easier

---

# what I run

## Monitoring

- Prometheus
- Grafana
- speedtest-exporter
- ACT Exporter
- CAdvisor

---

## Media

- Airsonic (:musical_note:)
- Jellyfin (:movie_camera:)
- Kodi (:tv:)
- Audioserve (:studio_microphone: :book:)

---

## Content

- NextCloud :cloud: :white_check_mark:
- Miniflux (:newspaper_roll: `RSS`)
- Timemachine (💻 ⏮)
- wiki.js
- Radicale :date: :card_index_dividers:
- RSS Bridge
- Resilio :arrows_counterclockwise:
- Gitea

---

# networking

- Public+Static IP Address
- Floating/Elastic IP

---

![bg cover](images/networking.jpg)

---

# really into networking?

<!-- https://preview.redd.it/b9fvg5yo5dl21.jpg?width=1024&auto=webp&s=9a5a4d9fdd4e486a23c159f4e4e27e88942018f5 -->

![bg cover](images/homelab1.jpg)

---

# really into networking?

<!-- https://preview.redd.it/8682wq9m8kn21.jpg?width=576&auto=webp&s=41e7ab264fcbb054209981126259b9b44b9d1d70 -->

![bg cover](images/homelab2.jpg)

---

# really want a cluster?

<!-- http://raspberrywebserver.com/raspberrypicluster/raspberry-pi-cluster.html -->

![bg cover](images/cluster.jpg)

---

# configuration

- terraform + docker
- kubernetes + helm
- ansible + galaxy
- docker-compose

---

# terraform

```json
module "requestbin" {
  name   = "requestbin"
  source = "./modules/container"
  image  = "jankysolutions/requestbin:latest"
  web {
    expose = true
    port   = "8000"
    host   = "requestbin.bb8.fun"
  }
  networks = "${list(module.docker.traefik-network-id)}"
}
```

---

# docker

```json
"Labels": {
    "traefik.docker.network": "traefik",
    "traefik.enable": "true",
    "traefik.frontend.headers.STSSeconds": "2592000",
    "traefik.frontend.headers.browserXSSFilter": "true",
    "traefik.frontend.rule": "Host:requestbin.bb8.fun",
    "traefik.port": "8000",
    "traefik.protocol": "http"
}
```

`docker run --tags ... --network traefik jankysolutions/requestbin:latest`

---

### OTA Updates

```json
provider "docker" {
  host      = "tcp://docker.vpn.bb8.fun:2376"
  cert_path = "./secrets/tatooine"
  version   = "~> 2.0.0"
}
```

---

# Docker API

1.  Manage networks,
2.  Containers,
3.  Configuration

All over a API, but only for one host.

docker swarm, but

---

# self-hosting references

- [kickball/awesome-selfhosted](https://github.com/Kickball/awesome-selfhosted)
- [linuxserver.io](https://www.linuxserver.io/)
- [r/selfhosted](https://reddit.com/r/selfhosted)

<!-- paginate: true -->

<style>
section.lead h1 {
  text-align: center;
}
</style>
