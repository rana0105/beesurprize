<template>
	<div style="margin-top: 10px">
		<a href="#" class="default-btn"><i class="fas fa-random"></i> Select randomly</a>
      <span class="quantity-title">Quantity</span>
      <div class="range-wrap">
          <input type="range" class="range">
          <output class="bubble"></output>
      </div>
      <a @click="removeTicketAll(contests)" class="default-btn"><i class="far fa-trash-alt"></i> Remove ticket</a>
      <div class="ticket-number">
          <div  v-for="b in contests" v-if="b.post_id == contestlive.id" class="item">
          	{{ b.ticket_no }}
          </div>
      </div>
      <div class="ticket-number-list">
          <button class="btn" v-for="n  in parseInt(contestlive.amount)">
          	<a style="color: red;" class="addcart" v-if="allreadyBook(n)">{{ n }}</a>
          	<a style="color: yellow;" @click="removeContestSingle(n)" class="addcart" v-if="booking(n, contestlive.id)">{{ n }}</a>
          	<a class="addcart" @click="addtoCart(n, contestlive)" v-if="!allreadyBook(n) && !booking(n, contestlive.id)">{{ n }}</a>
          </button>
      </div>
	</div>
</template>
<script>
	import axios from 'axios';
	import {mapActions, mapGetters} from 'vuex';
    export default {

	  data () {
	    return {
	      contestlive: {},
	      contestbook: {},
	      bookContest: [],
	      baseUrlPath: ''
	    }
	  },

	  props: ['ticketId'],

	  mounted () { 
	  	this.loadContest();
	  	this.loadBook();
	  	this.baseUrlPath = window.axios.defaults.baseURL;
	    
	  },

		 methods:{

		 	...mapActions({
			  			addContest: 'cart/addContest',
			  			singleContestRemove: 'cart/singleContestRemove',
			  			allTicketRemove: 'cart/allTicketRemove'
			  	}),

	    loadContest() {
	    	axios.get('/livecontest/', { params: {livecontestId: this.ticketId}})
	      .then(response => {
	        this.contestlive = response.data
	      })
	      .catch(err => {
	        console.log(err)
	      })
	    },

	    loadBook() {
	    	axios.get('/contestbook/', { params: {livecontestId: this.ticketId}})
	      .then(response => {
	        this.contestbook = response.data
	      })
	      .catch(err => {
	        console.log(err)
	      })
	    },

	    addtoCart(item, post) {
	    		this.addContest({item, post});
	      },

      removeContestSingle(n) {
      	this.singleContestRemove(n)
      },

      removeTicketAll(con) {
        this.allTicketRemove(con)
      },

      allreadyBook(n) {
      	let t = this.contestbook.findIndex(x => x.ticket_number == n)
      	if (t<= -1) {
      		return false;
      	}else {
      		return true;
      	}
      },

      booking(n, id) {
      	var t = this.contests.findIndex(function (x) {
	      		if (x.post_id ==  id) {
			        return x.ticket_no == n;
	      		}
		      });

      	if (t<= -1) {
      		return false;
      	}else {
      		return true;
      	}
      }
	  },

	  computed: {
	  	...mapGetters({
	  		contests: 'cart/contests'
	  	}),
	  }
};
</script>
<style>
	a.addcart {
		color: red;
	}
</style>


