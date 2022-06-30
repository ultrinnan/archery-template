# archery-template
WP template and dev environment

---

Font - https://thedigital.gov.ua/fonts

---

Docker-compose file was added for local development.

`docker compose up -d`

`docker compos down`

To remove totaly everything and rebuild use `docker compose down --rmi all`

To have local database just need to export it from live site via wp-migrate plugin and import it using db tool in IDE
