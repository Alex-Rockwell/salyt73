function addControlersToVideo(videoWrapperSelector, videoWrapperActiveClass, videoSelector) {
    const videoWrappers = document.querySelectorAll(videoWrapperSelector);
    const videos = document.querySelectorAll(videoSelector);

    videoWrappers.forEach((videoWrapper, i) => {
        videoWrapper.addEventListener('click', () => {
            videoWrapper.classList.add(videoWrapperActiveClass);
            videos[i].setAttribute('controls', 'controls');
        });
    });
}

export default addControlersToVideo;