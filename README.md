```markdown
# Match3 with PayPal REST Payouts Integration

This project is a minimal Match‑3 game frontend with a PHP server endpoint demonstrating PayPal REST Payouts.

Important safety notes
- Do NOT commit your real client_id/client_secret to any public repo.
- Test in PayPal Sandbox first. Use sandbox client_id/client_secret and set 'env' => 'sandbox' in config/paypal.php.
- Require authentication and verify user balance server-side before issuing any payout.
- Use HTTPS for all server endpoints.
- Rotate & protect credentials immediately after testing.

Files
- index.html — game UI and Withdraw UI (demo)
- assets/game.js — minimal match‑3 placeholder
- api/request_payout.php — server-side payout endpoint using PayPal REST Payouts
- config/paypal.example.php — example config file. Copy to config/paypal.php on the server and add your credentials.

How it works (high level)
1. Player plays in the browser and accumulates points (client-side demo only).
2. Player clicks "Withdraw", enters PayPal email + amount.
3. Browser POSTs to /api/request_payout.php (server must enforce authentication, check balances).
4. request_payout.php retrieves a bearer token from PayPal (cached), constructs a Payouts request and posts it.
5. PayPal returns a JSON response with batch and item information. Server records payout in DB (you must implement this).

Deploying to InfinityFree (basic)
1. Upload files into your domain's public_html via FTP.
2. In `config/` create `paypal.php` from `paypal.example.php` and add your client_id / client_secret.
   - Set `'env' => 'sandbox'` to test first.
3. Do not make config/paypal.php publicly accessible; store it outside the webroot if possible.
4. Test with sandbox accounts, then move to live once fully tested.

Security & compliance checklist (mandatory before going live)
- Authenticate users and require KYC if necessary.
- Server-side validation of available balance and payout limits before calling PayPal.
- Rate limit and anti-fraud checks on the payout endpoint.
- TLS/HTTPS for the site and API endpoints.
- Logging and alerting for payout failures and large transfers.
- Confirm PayPal app settings and permissions (payouts must be enabled for your account).

If you'd like, I can:
- Add MySQL-backed user accounts, balance tracking, and an admin approval UI.
- Add a webhook handler to track payout item/batch updates from PayPal.
- Harden token storage and rotate credentials automatically.

```