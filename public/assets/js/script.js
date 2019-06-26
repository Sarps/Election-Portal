
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

function saveVote(e, nominee, value) {
	let el = e.target.closest('.vote-btn');

	el.classList.add('selected');
	(el.nextElementSibling || el.previousElementSibling).classList.remove('selected')

	axios.post('/vote', {nominee, value})
	.then(data => {
		el.classList.add('selected')
		(el.nextElementSibling || el.previousElementSibling).classList.remove('selected')
	})
	.catch(e => {
		console.log(e)
	})

}

window.addEventListener('DOMContentLoaded', function () {

	Reveal.initialize({
		history: true,
		controls: true,
		controlsTutorial: true,
		overview: true,
		transition: 'convex',
		backgroundTransition: 'fade',
		transitionSpeed: 'slow',
		slideNumber: false,
		navigationMode: 'linear',
	});

	var form = document.querySelector('form.login');
	var id_input = document.getElementById('ndbe_id');
	var presentation = document.querySelector('.reveal');
	var key = "", animationTimeout;

	form.onsubmit = function (e) {
		e.preventDefault && e.preventDefault();

		key = id_input.value.trim();
		if (!key.length) {
			return
		}

		axios.post('/signin', {id: key})
		.then(data => {
			presentation.classList.remove('blurred');
			form.style.display = "none";
		})
		.catch(e => {
			clearTimeout(animationTimeout);
			id_input.classList.add('denied');
			id_input.classList.add('animation');
			animationTimeout = setTimeout(function () {
				id_input.classList.remove('animation');
			}, 1000);
			form.style.display = "block";
		})
		
	};

});

window.addEventListener('hashchange', function() {
	if (location.hash.split('/')[1] == 2) {
		setTimeout(() => {
			location = location.origin
		}, 5000);
	}
})

