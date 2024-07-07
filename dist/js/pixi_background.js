let app = new PIXI.Application({ width: window.innerWidth, height: window.innerHeight, backgroundColor: 0xFFFFFF });

let container = document.createElement('div');
container.id = 'pixi-container';
container.style.position = 'fixed';
container.style.top = '0';
container.style.left = '0';
container.style.width = '100%';
container.style.height = '100%';
container.style.zIndex = '-1';

document.body.appendChild(container);
container.appendChild(app.view);

window.addEventListener('resize', () => {
    app.renderer.resize(window.innerWidth, window.innerHeight);
});
