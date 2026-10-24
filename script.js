const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelector('.nav-links');
navToggle?.addEventListener('click',()=>{const open=navLinks.classList.toggle('open');navToggle.setAttribute('aria-expanded',String(open));});
navLinks?.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>navLinks.classList.remove('open')));

const cursor = document.querySelector('.cursor-glow');
window.addEventListener('pointermove', e=>{ if(cursor){cursor.style.left=e.clientX+'px';cursor.style.top=e.clientY+'px';}});

const observer = new IntersectionObserver(entries=>{entries.forEach(entry=>{if(entry.isIntersecting){entry.target.classList.add('in-view');observer.unobserve(entry.target);}})},{threshold:.12});
document.querySelectorAll('.reveal').forEach(el=>observer.observe(el));

document.querySelectorAll('.filter').forEach(btn=>btn.addEventListener('click',()=>{
  document.querySelectorAll('.filter').forEach(b=>b.classList.remove('active'));btn.classList.add('active');
  const filter=btn.dataset.filter;
  document.querySelectorAll('.project-card').forEach(card=>{card.classList.toggle('is-hidden',filter!=='all'&&card.dataset.category!==filter);});
}));

document.querySelectorAll('[data-placeholder="true"]').forEach(link=>link.addEventListener('click',e=>{e.preventDefault();alert('Add your real profile/project URL in index.php before deployment.');}));

const tilt = document.querySelector('.tilt-card');
if(tilt && matchMedia('(pointer:fine)').matches){
  tilt.addEventListener('pointermove',e=>{const r=tilt.getBoundingClientRect();const x=(e.clientX-r.left)/r.width-.5;const y=(e.clientY-r.top)/r.height-.5;tilt.style.transform=`rotateX(${(-y*5).toFixed(2)}deg) rotateY(${(x*6).toFixed(2)}deg) rotateZ(-2deg)`;});
  tilt.addEventListener('pointerleave',()=>tilt.style.transform='rotateZ(-2deg)');
}

const sections=[...document.querySelectorAll('main section[id]')];
const navAnchors=[...document.querySelectorAll('.nav-links a')];
const activeObserver=new IntersectionObserver(entries=>entries.forEach(entry=>{if(entry.isIntersecting){navAnchors.forEach(a=>a.classList.toggle('active',a.getAttribute('href')==='#'+entry.target.id));}}),{rootMargin:'-35% 0px -55%'});
sections.forEach(s=>activeObserver.observe(s));
