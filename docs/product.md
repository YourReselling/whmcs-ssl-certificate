# SSL-Zertifikat

Bestellung: `POST /products/ssl-certificates/order`. ID: `data.certificate.id`.

Kundenfelder: `common_name`, `csr`, `dcv`.

| Feld | Typ | Pflicht | Hinweis |
|---|---|---|---|
| `common_name` | string | Ja | Primary domain, must match the CSR |
| `csr` | string | Ja | PEM-encoded CSR |
| `dcv` | array | Ja | Validation per domain: \[{"domain": "example.com", "method": "dns\|email\|file", "email": "admin@example.com"}\] |
| `period_months` | integer | Ja | Period in months, must be one of the product periods |
| `product_id` | string | Ja | Product ID from GET /products |
| `approver` | object | Nein | Contact person, required for EV products |
| `organization` | object | Nein | Required for OV/EV products |
| `private_key` | string | Nein | Optional: store the matching key so it can be downloaded later |
| `sans` | array | Nein | Additional domains (multi-domain products only) |

API-Key-Rechte für alle Modulansichten und Aktionen: `certificates:create`, `certificates:delete`, `certificates:read`.

Verwaltungsaktionen: Produktübersicht und Zugangsdaten.

Hinweise:
- dcv list min1, each domain and method(email,dns,file) required
- DV/OV/EV product requirements may require organization and approver details
- No suspend/unsuspend endpoint; revocation is not ordinary service pause
- POST /products/ssl-certificates/{certificate}/renew exists
