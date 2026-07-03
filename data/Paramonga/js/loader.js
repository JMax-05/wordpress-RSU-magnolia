export async function loadSections(sectionIds) {
  const main = document.querySelector('main');
  if (!main) return;

  const parts = await Promise.all(
    sectionIds.map(async (id) => {
      const res = await fetch(`sections/${id}.html`);
      return res.ok ? res.text() : '';
    })
  );

  main.innerHTML = parts.join('');
}
