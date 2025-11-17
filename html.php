<?php
$name = $email = $telefon = $xabar = $mavzu="";
$nameerr = $emailerr = $telefonerr = $xabarerr = $mavzuerr="";
if($_SERVER["REQUEST_MEDHOD"] == "POST"){
if(epmty($_POST["name"])){
}



}





?>








<!doctype html>
<html lang="uz">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Contact Us - HTML/CSS</title>
  <style>
    :root{
      --bg:#0f1724;
      --card:#0b1220;
      --accent:#06b6d4;
      --muted:#94a3b8;
      --glass: rgba(255,255,255,0.03);
      --radius:14px;
      --gap:14px;
      color-scheme: dark;
    }

    *{box-sizing:border-box}
    html,body{height:100%;margin:0;font-family:Inter,ui-sans-serif,system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial;color:#e6eef6;background:linear-gradient(180deg,var(--bg),#071025);}

    .wrap{
      min-height:100%;display:flex;align-items:center;justify-content:center;padding:40px;
    }

    .card{
      width:100%;max-width:920px;background:linear-gradient(180deg,var(--card),#071028);border-radius:var(--radius);box-shadow:0 10px 30px rgba(2,6,23,0.6);padding:28px;display:grid;grid-template-columns:1fr 420px;gap:22px;align-items:start;
    }

    @media (max-width:900px){
      .card{grid-template-columns:1fr;}
    }

    .info{
      padding:12px 18px;border-radius:10px;background:linear-gradient(180deg,rgba(255,255,255,0.02),var(--glass));backdrop-filter:blur(6px);
    }

    h1{margin:0 0 6px 0;font-size:22px}
    p.lead{margin:0 0 14px 0;color:var(--muted);line-height:1.5}

    .contact-meta{display:flex;flex-direction:column;gap:8px;margin-top:8px}
    .meta-row{display:flex;gap:10px;align-items:center}
    .meta-dot{width:10px;height:10px;border-radius:50%;background:var(--accent);box-shadow:0 0 8px rgba(6,182,212,0.18)}
    .meta-text{font-size:14px;color:var(--muted)}

    form{
      background:transparent;padding:12px;border-radius:12px;display:flex;flex-direction:column;gap:12px;
    }

    .grid{
      display:grid;grid-template-columns:1fr 1fr;gap:12px;
    }
    @media (max-width:600px){.grid{grid-template-columns:1fr}}

    label{display:block;font-size:13px;color:var(--muted);margin-bottom:6px}
    input[type=text],input[type=email],input[type=tel],textarea,select{
      width:100%;padding:12px 14px;border-radius:10px;border:1px solid rgba(255,255,255,0.04);background:linear-gradient(180deg,rgba(255,255,255,0.01),rgba(255,255,255,0.02));color:inherit;font-size:14px;outline:none;transition:box-shadow .18s,border-color .18s,transform .05s;
    }

    input:focus,textarea:focus,select:focus{box-shadow:0 6px 18px rgba(6,182,212,0.08);border-color:rgba(6,182,212,0.5);transform:translateY(-1px)}

    textarea{min-height:120px;resize:vertical;padding-top:10px}

    .row{display:flex;gap:12px;align-items:center}

    .small{font-size:12px;color:var(--muted)}

    .actions{display:flex;gap:12px;align-items:center;margin-top:6px}

    button{
      -webkit-appearance:none;border:0;padding:12px 16px;border-radius:10px;font-weight:600;cursor:pointer;display:inline-flex;align-items:center;gap:8px;
    }

    .btn-primary{background:linear-gradient(90deg,var(--accent),#7c3aed);color:#051926;box-shadow:0 8px 24px rgba(124,58,237,0.12)}
    .btn-ghost{background:transparent;border:1px solid rgba(255,255,255,0.06);color:var(--muted)}

    .hint{font-size:12px;color:var(--muted)}

    /* required marker */
    .req{color:#ffb4a2;margin-left:6px;font-size:13px}

    /* simple validation styling using :placeholder-shown hack */
    input:required:placeholder-shown, textarea:required:placeholder-shown{
      box-shadow:0 0 0 3px rgba(255,90,90,0.02) inset;border-color:rgba(255,90,90,0.12);
    }

    footer.note{grid-column:1/-1;padding-top:6px;color:var(--muted);font-size:13px}

    /* subtle floating label effect */
    .field{position:relative}
    .field input:focus + .label, .field input:not(:placeholder-shown) + .label, .field textarea:focus + .label, .field textarea:not(:placeholder-shown) + .label{
      transform:translateY(-28px) scale(.85);opacity:0.95;color:var(--muted);
    }
    .label{position:absolute;left:14px;top:12px;pointer-events:none;transition:all .18s ease;transform-origin:left top;color:rgba(255,255,255,0.55);font-size:14px}

    /* accessibility focus outline for keyboard users */
    :focus{outline:2px solid rgba(6,182,212,0.12);outline-offset:3px}

  </style>
</head>
<body>
  <div class="wrap">
    <div class="card" role="region" aria-label="Contact form card">

      <div class="info">
        <h1>Kontakt</h1>
        <p class="lead">Savollaringiz yoki takliflaringiz bo'lsa, quyidagi shakl orqali yozing. Biz odatda 1-2 ish kunida javob beramiz.</p>

        <div class="contact-meta">
          <div class="meta-row"><span class="meta-dot" aria-hidden></span><span class="meta-text">Email: support@example.com</span></div>
          <div class="meta-row"><span class="meta-dot" aria-hidden></span><span class="meta-text">Telefon: +998 90 123 45 67</span></div>
          <div class="meta-row"><span class="meta-dot" aria-hidden></span><span class="meta-text">Ish vaqti: Dushanba - Jum'a, 09:00 - 18:00</span></div>
        </div>

      </div>

      <form action="#" method="post" novalidate aria-label="Contact us form">
        <div class="grid">
          <div>
            <label for="fullname">To'liq ism <span class="req">*</span></label>
            <div class="field">
              <input id="fullname" name="fullname" type="text"  placeholder=" ">
              <span class="label">Masalan: Jamshid Karimov</span>
            </div>
          </div>

          <div>
            <label for="email">Email <span class="req">*</span></label>
            <div class="field">
              <input id="email" name="email" type="email"  placeholder=" ">
              <span class="label">you@example.com</span>
            </div>
          </div>

          <div>
            <label for="phone">Telefon</label>
            <div class="field">
              <input id="phone" name="phone" type="tel" placeholder=" ">
              <span class="label">+998 90 123 45 67</span>
            </div>
          </div>

          <div>
            <label for="topic">Mavzu</label>
            <div class="field">
              <select id="topic" name="topic" aria-label="Mavzu tanlang">
                <option value="">-- Tanlang --</option>
                <option>Umumiy savol</option>
                <option>Hamkorlik</option>
                <option>Media so'rovi</option>
              </select>
            </div>
          </div>

        </div>

        <div>
          <label for="message">Xabar <span class="req">*</span></label>
          <div class="field">
            <textarea id="message" name="message"  placeholder=" "></textarea>
            <span class="label">Bu yerga xabaringizni yozing...</span>
          </div>
        </div>

        <!-- simple anti-spam honeypot (won't be displayed to users if styled server-side) -->
        <div style="display:none;" aria-hidden="true">
          <label>Leave this empty</label>
          <input type="text" name="hp_field" autocomplete="off">
        </div>

        <div class="actions">
          <button type="submit" class="btn-primary">Jo'natish</button>
          <button type="reset" class="btn-ghost">Tozalash</button>
          <div class="hint">Barcha maydonlar (*) majburiy emas - faqat keraklilari belgilangan.</div>
        </div>

        <footer class="note">Qaysidir foydalanuvchi tomonidan yuborilgan ma'lumotlar server tomonga yuborilmagan — formani ishlashi uchun <code>action</code> atributiga server url yoki mailto: qo'shing.</footer>
      </form>

    </div>
  </div>
</body>
</html>
