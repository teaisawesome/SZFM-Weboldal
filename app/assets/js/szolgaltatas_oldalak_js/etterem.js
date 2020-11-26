const etlapButton = document.querySelector('.etlap-button');
const itallapButton = document.querySelector('.itallap-button');

const lapOpen = document.querySelector('.lap-nyitva');
const laOpen = document.querySelector('.lap-nyitva2');

//define the object we wanna move around and the properties ( object, time, {animate})
/* 
const tween = TweenLite.to('.cover',1, {
    width: "50%"
}) */

const tl = new TimelineLite({ paused: true, reversed: true });

const tk = new TimelineLite({ paused: true, reversed: true });

// multiply animations
tl.to(".cover", 1, {
        width: "50%",
        ease: Power2.easeOut
    })
    .to(".etlap-button", 1, {
        width: "50%",
        ease: Power2.easeOut
    }, "-= 1")
    .to(".itallap-button", 1, {
        width: "50%",
        opacity: 0,
        ease: Power2.easeOut
    }, "-= 1")
    .to(
        ".etlap-itallap",
        1, {
            height: '100%',
            ease: Power2.easeOut
        },
        "-= 0.5"
    )
    .fromTo(
        ".lap-nyitva",
        0.5, {
            opacity: 0,
            x: 50,
            z: 0,
            ease: Power2.easeOut
        }, {
            opacity: 1,
            z: 2,
            x: 0,
            onComplete: function() {
                //console -> if the animation finished -> we get a message
                lapOpen.style.pointerEvents = "auto";
                console.log("done");
            }
        }
    );


tk.to(".cover", 1, {
        width: "50%",
        ease: Power2.easeOut
    })
    .to(".itallap-button", 1, {
        width: "70%",
        ease: Power2.easeOut
    }, "-= 1")
    .to(".etlap-button", 1, {
        width: "0%",
        opacity: 0,
        ease: Power2.easeOut
    }, "-= 1")
    .to(
        ".etlap-itallap",
        1, {
            height: '100%',
            ease: Power2.easeOut
        },
        "-= 0.5"
    )
    .fromTo(
        ".lap-nyitva2",
        0.5, {
            opacity: 0,
            x: 50,
            z: 0,
            ease: Power2.easeOut
        }, {
            opacity: 1,
            z: 2,
            x: 0,
            onComplete: function() {
                //console -> if the animation finished -> we get a message
                laOpen.style.pointerEvents = "auto";
                console.log("done");
            }
        }
    );

var i = false;
etlapButton.addEventListener("click", () => {

    i == false ? itallapButton.disabled = true : itallapButton.disabled = false;
    i == false ? i = true : i = false;

    if (tl.isActive()) {
        e.preventDefault();
        e.stopimmediatePropagation();
        return false;
    }

    toggleTween(tl)

});



itallapButton.addEventListener("click", () => {

    i == false ? etlapButton.disabled = true : etlapButton.disabled = false;
    i == false ? i = true : i = false;

    if (tk.isActive()) {
        e.preventDefault();
        e.stopimmediatePropagation();
        return false;
    }
    toggleTween(tk)
});



function toggleTween(tween) {
    tween.reversed() ? tween.play() : tween.reverse();
}