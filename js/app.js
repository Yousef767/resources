import './bootstrap';

const auth = document.querySelector('meta[name="auth_user"]');

const channel = window.Echo.private(`private.customer.${auth.dataset.user}`);

channel.subscribed(() => {

}).listen('PostActivatedEvent', (event) => {
    sendNotificationAlert('your post was approved by admins', 'post approved');

}).listen('RechargeRequestEvent', (event) => {
    sendNotificationAlert('Reacharge balance was approved by admins', 'recharge balance approved');
})

function sendNotificationAlert(body, tag, icon='/images/logo.png', audio='/audio/notification.mp3') {

    Notification.requestPermission().then(perm => {
        if(perm == "granted") {

            new Notification('Notification Alarm', {
                body: body,
                tag: tag,
                icon: icon
            });

            let tone = new Audio(audio);
            tone.play();
        }
    })
}
