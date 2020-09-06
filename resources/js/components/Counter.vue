<template>
	<div>
		<section class="flex text-6xl justify-center content-center">
			<div class="row">
				<div class="col-md-3 relative">
					<h4 class="conter-style">{{ displayDays }}</h4>
					<div class="lebel text-sm absolute bottom-0">Days</div>
				</div>
				<div class="col-md-3 relative">
					<h4 class="conter-style">{{ displayHours }}</h4>
					<div class="lebel text-sm absolute bottom-0">Hours</div>
				</div>
				<div class="col-md-3 relative">
					<h4 class="conter-style">{{ displayMinutes }}</h4>
					<div class="lebel text-sm absolute bottom-0">Minutes</div>
				</div>
				<div class="col-md-3 relative">
					<h4 class="conter-style">{{ displaySeconds }}</h4>
					<div class="lebel text-sm absolute bottom-0">Seconds</div>
				</div>
			</div>
		</section>
	</div>
</template>
<script>
	export default {
	  data () {
	    return {
	    	contestlive: {},
	      displayDays: 0,
	      displayHours: 0,
	      displayMinutes: 0,
        displaySeconds: 0
	    }
	  },

	  props: ['livecontestId'],

	  computed: {
	  	_seconds: () => 1000,
	  	_minutes() {
	  		return this._seconds * 60;
	  	},
	  	_hours() {
	  		return this._minutes * 60;
	  	},
	  	_days() {
	  		return this._hours * 24;
	  	}
	  },

	  mounted() {
	  	this.showRemaining();
	  	this.loadContest();
	  },

	  methods: {
	  	loadContest() {
	    	axios.get('/livecontest/', { params: {livecontestId: this.livecontestId}})
	      .then(response => {
	        this.contestlive = response.data
	      })
	      .catch(err => {
	        console.log(err)
	      })
	    },

	  	formateNumber: num => (num < 10 ? "0" + num : num),

	  	showRemaining() {
	  		const timer = setInterval(()=> {
	  			const now = new Date();
	  			const end = new Date(this.contestlive.end_date);
	  			const distance = end.getTime() - now.getTime();

	  			if (distance < 0 ) {
	  				clearInterval(timer);
	  				return;
	  			}

	  			const days = Math.floor((distance / this._days));
	  			const hours = Math.floor((distance % this._days)/ this._hours);
	  			const minutes = Math.floor((distance % this._hours)/ this._minutes);
	  			const seconds = Math.floor((distance % this._minutes)/ this._seconds);
	  			this.displayMinutes = this.formateNumber(minutes);
	  			this.displaySeconds = this.formateNumber(seconds);
	  			this.displayHours = this.formateNumber(hours);
	  			this.displayDays = this.formateNumber(days);

	  		}, 1000);
	  	}
	  }
	};
</script>
<style>
	h4.conter-style {
	    font-size: 38px;
	    color: #ffc107;
	}
</style>