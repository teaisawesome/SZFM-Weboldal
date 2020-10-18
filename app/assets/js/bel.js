const labels = document.querySelectorAll('.belepes-form-control label');

labels.forEach(label => {
    label.innerHTML = label.innerText
        .split('').map((letter, idx) =>
            `<span style="transition-delay: ${idx * 50}ms">${letter}</span>`).join('');
});

const errorMessage = document.querySelector('#errorMessage');

const tl = new TimelineMax({ delay: 0 });

tl.fromTo(errorMessage, 0.7, { y: "1000" }, { y: "0" });