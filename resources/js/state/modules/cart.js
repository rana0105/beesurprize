export const state = {

	contests: JSON.parse(window.localStorage.getItem('contests')) ? 
	JSON.parse(window.localStorage.getItem('contests')) : [],
	//contests: [],
};

export const getters = {
	contests: state => state.contests,
};

export const actions = {
	addContest({commit, state}, {item, post}) {
		let c = {
			ticket_no:item,
			post_id:post.id,
			title:post.title,
			price:post.price,
			image:post.f_image,
			contest_no:post.contest_no
		}
		// let contests = [];
		commit('ADD_CONTEST', c)
		saveContest(state.contests);
	},

	singleContestRemove({commit, state}, t) {
		let con = state.contests;
		for (var i = 0; i < con.length; i++) {
			if(con[i].ticket_no == t) {
				commit('REMOVE_ITEM', i);
				saveContest(state.contests);
				return;
			}			
		}
	},

	allTicketRemove({commit, state}) {
		let con = state.contests;
		commit('ALL_REMOVE', con);
		saveContest(state.contests);
	}
};

export const mutations = {
	ADD_CONTEST(state, c) {
		state.contests.push(c);
	},

	UPDATE_COUNT(state, {count, index}) {
		state.contests[index].count = count;
	},

	REMOVE_ITEM(state, index) {
		state.contests.splice(index, 1);
	},

	ALL_REMOVE(state, index) {
		state.contests.splice(index);
	}
};

function saveContest(contests) {
	window.localStorage.setItem('contests', JSON.stringify(contests));
}