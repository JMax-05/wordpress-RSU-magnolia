export function initServices() {
  const tabs = document.querySelectorAll('.service-tab');
  const panels = document.querySelectorAll('.service-panel');
  if (!tabs.length) return;

  const activate = (tab) => {
    tabs.forEach((t) => {
      t.classList.toggle('active', t === tab);
      t.setAttribute('aria-selected', String(t === tab));
    });
    panels.forEach((p) => {
      p.classList.toggle('active', p.dataset.panel === tab.dataset.tab);
    });
  };

  tabs.forEach((tab) => tab.addEventListener('click', () => activate(tab)));
  activate(tabs[0]);
}
