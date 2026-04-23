
document.addEventListener('DOMContentLoaded', () => {

  //ceas live 
  const clockEl = document.getElementById('live-clock');
  if (clockEl) {
    setInterval(() => {
      clockEl.textContent = new Date().toLocaleTimeString('ro-RO', { hour12: false });
    }, 1000);
  }

  //highlight la click 
  const timeline = document.querySelectorAll('#timeline-list li');
  timeline.forEach(li => {
    li.style.cursor = 'pointer';
    li.addEventListener('click', () => {
      timeline.forEach(el => {
        el.style.background = '';
        el.style.borderLeft = '';
        el.style.paddingLeft = '';
      });
      li.style.background = '#8a887c';
      li.style.borderLeft = '4px solid gold';
      li.style.paddingLeft = '8px';
    });
  });

  //sortare listă
  const watchData = [
    { name: 'Patek Philippe Grandmaster Chime Ref. 6300A-010', price: 31.19 },
    { name: 'Patek Philippe Grande & Petite Sonnerie Ref. 6301A-010', price: 18.5 },
    { name: 'Patek Philippe Perpetual Calendar Chronograph Ref. 1518', price: 16 },
    { name: 'F.P.Journe Unique FFC (Francis Ford Coppola)', price: 10.8 },
    { name: 'Audemars Piguet Grosse Pièce No. 16869', price: 7.7 },
    { name: 'Patek Philippe Grandmaster Chime Ref. 6300G (Stallone)', price: 5.4 },
  ];

  function renderList(data) {
    const ol = document.getElementById('watch-list');
    if (!ol) return;
    ol.innerHTML = '';
    data.forEach(w => {
      const li = document.createElement('li');
      li.innerHTML = `<strong>${w.name}</strong> — ~$${w.price} milioane`;
      ol.appendChild(li);
    });
  }

  const sortDesc = document.getElementById('sort-desc');
  const sortAsc  = document.getElementById('sort-asc');
  if (sortDesc) sortDesc.addEventListener('click', () =>
    renderList([...watchData].sort((a, b) => b.price - a.price)));
  if (sortAsc) sortAsc.addEventListener('click', () =>
    renderList([...watchData].sort((a, b) => a.price - b.price)));

  renderList(watchData);

  //validare formular 
  const form = document.getElementById('contact-form');
  if (form) {
    form.addEventListener('submit', e => {
      e.preventDefault();
      const name   = document.getElementById('contact-name').value.trim();
      const email  = document.getElementById('contact-email').value.trim();
      const msg    = document.getElementById('contact-msg').value.trim();
      const status = document.getElementById('form-status');
      const emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

      if (!name || !email || !msg) {
        status.textContent = ' Te rog completează toate câmpurile.';
        status.style.color = 'red';
      } else if (!emailOk) {
        status.textContent = ' Email invalid.';
        status.style.color = 'red';
      } else {
        status.textContent = ` Mulțumesc, ${name}! Mesajul a fost trimis.`;
        status.style.color = 'green';
      }
    });
  }

  //dark mode 
  const darkBtn = document.getElementById('dark-btn');
  if (localStorage.getItem('darkMode') === 'true') {
    document.body.classList.add('dark-mode');
    if (darkBtn) darkBtn.textContent = 'Light mode';
  }
  if (darkBtn) {
    darkBtn.addEventListener('click', () => {
      document.body.classList.toggle('dark-mode');
      const isDark = document.body.classList.contains('dark-mode');
      darkBtn.textContent = isDark ? 'Light mode' : 'Dark mode';
      localStorage.setItem('darkMode', isDark);
    });
  }

});