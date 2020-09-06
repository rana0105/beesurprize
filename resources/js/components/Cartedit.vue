<template>
	<div>
		<div class="row">
			<div class="col-lg-7 col-md-12">
          <div class="cart-list">
            <div class="title">
                <h4>
                    Your tickets
                </h4>
                <button class="clear-btn">
                    clear all
                </button>
            </div>
            <div v-for="post in posts" class="item-list">
                <div class="item">
                    <img :src="baseUrlPath +
                      '/uploads/livecontest/' + post.image" width="50" height="55">
                        <div>
                            <h3>
                                {{ post.title }}
                            </h3>
                            <p>
                                Contest No:
                                <span>
                                    {{ post.contest_no }}
                                </span>
                            </p>
                        </div>
                    </img>
                </div>
                <div class="ticket-number">
                    <div v-for="t in post.ticket_no" class="item">
                        {{ t }} 
                    </div>
                </div>
                <div class="ticket-number">{{ post.count }}</div>
                <div class="cart-edit">
                    <a :href="baseUrlPath + '/ticket-edit/' + post.id">
                        <i class="fas fa-pencil-alt">
                        </i>
                    </a>
                    <a @click="removeTicketAll(contests)">
                        <i class="far fa-trash-alt">
                        </i>
                    </a>
                </div>
                <hr>
                </hr>
            </div>
          </div>
      </div>
      <div class="col-lg-4 offset-lg-1 col-md-12">
          <div class="total-payment">
              <h4>
                  Checkout
              </h4>
              <div>
              	<h5 v-for="tic in posts">
                    Ticket Price
                    <span>
                        ${{ tic.ticket_no.length*tic.price }}
                    </span>
                </h5>
                <hr>
                <h5>
                    Total
                    <span>
                        {{ totalPrice }}
                    </span>
                </h5>
              </div>
              
                  <a v-if="isLoggedIn" class="btn default-btn" data-target="#questionModal" data-toggle="modal" href="#">
                      Play Now
                  </a>
                  <a v-if="!isLoggedIn" class="btn default-btn" data-target="#logiWarningModal" data-toggle="modal" href="#">
                      Play Now
                  </a>
              </hr>
          </div>
          <a class="rules-modal" data-target="#gameRulesModal" data-toggle="modal" href="#">
              * See how to play
          </a>
      </div>
    </div>
	</div>
</template>
<script>
	import axios from 'axios';
	import {mapActions, mapGetters} from 'vuex';
  export default {

	  data () {
	    return {
        ticketid: '',
	      contestlive: {},
	      bookContest: [],
	      allpostsave: '',
        baseUrlPath: '',
        isLoggedIn: ''
	    }
	  },
	  mounted () { 
	  	this.loadContest();
      this.baseUrlPath = window.axios.defaults.baseURL;
      this.isLoggedIn = window.localStorage.getItem("user") != null;
	    
	  },

	  props: ['livecontestId'],

		 methods:{

		 	...mapActions({
			  			addContest: 'cart/addContest',
			  			allContestRemove: 'cart/allContestRemove',
              allTicketRemove: 'cart/allTicketRemove'
			  	}),

	    loadContest() {
	    	axios.get('/livecontest/', { params: {livecontestId: this.livecontestId}})
	      .then(response => {
	        this.contestlive = response.data
	      })
	      .catch(err => {
	        console.log(err)
	      })
	    },

	    addtoCart(item, id) {
	    		this.addContest({item, id});
	      },

      removeContestAll(id) {
      	this.allContestRemove(id)
      },

      removeTicketAll(con) {
        this.allTicketRemove(con)
      },
     // @click="savePost(posts)"
      savePost (allpost) {
      	axios.post('/allpostsave/', { data: {posts: allpost}})
	      .then(response => {
	        this.allpostsave = response.data
	      })
	      .catch(err => {
	        console.log(err)
	      })
      },

      editTicket(id) {
        $(".modal-body #tId").val(id);
        //console.log(id);
        //data-target="#ticketEditModal"
        //this.$root.$emit("bv::show::modal", "ticketEditModal");
      } 
	  },

	  computed: {
	  	...mapGetters({
	  		contests: 'cart/contests',
	  	}),

  	posts () {
  		var resArr = [];
			this.contests.forEach(function(item){
			  var i = resArr.findIndex(x => x.id == item.post_id);
			  if(i <= -1){
			    resArr.push({id: item.post_id, title: item.title, image: item.image, contest_no:item.contest_no, price:item.price, ticket_no: [item.ticket_no] });
			  } else {
			  	resArr[i].ticket_no.push(item.ticket_no);
			  }

			});

			return resArr;
		  },

      totalCount() {
        let sum = 0;
        _.each(this.posts, p=>{
          sum += p.ticket_no.length;
        })
        return sum;
      },

      totalPrice() {
        let sum = 0;
        _.each(this.posts, p=>{
          sum += p.ticket_no.length * p.price;
        })
        return sum;
      }
	  }
  };
</script>
<style>
	a.addcart {
		color: red;
	}
</style>
