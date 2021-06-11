<template>
	<div class="container">
		<h1>PREFLOP RANGE</h1>
		<div>
			<select name="situation" v-model="situation">
			<option v-for="(situation, index) of situations" :key="situation.index" :value="situation.name">{{ situation.name }}</option>
			</select>
		</div>
		<div>
			<select name="my_position" v-model="my_position">
				<option v-for="(myPosition, index) of getMyPositions" :key="myPosition.index" :value="myPosition.use">{{ myPosition.use }}</option>
			</select>
		</div>
		<div>
			<select name="opponent_position" v-model="opponent_position">
				<option v-for="(opponentPosition, index) of getOpponentPositions" :key="opponentPosition.index" :value="opponentPosition.label">{{ opponentPosition.label }}</option>
			</select>
		</div>
	</div>
</template>

<script>
export default {
    name: "PreflopRaise",
	data: function() {
        return {
            situation: 'Open Raise',
            my_position: '',
            opponent_position: '',
            situations: [
                { id: 0, name: 'Open Raise', myPositions: [
                    { tId: 0, use: 'UTG', opponentPositions: [
                        {label: '', life: 0 }
                    ]},
                    { tId: 1, use: 'HJ', opponentPositions: [
                        {label: '', life: 1 },
                    ]},
					{ tId: 1, use: 'CO', opponentPositions: [
                        {label: '', life: 2 },
                    ]},
					{ tId: 1, use: 'BTN', opponentPositions: [
                        {label: '', life: 3 },
                    ]},
					{ tId: 1, use: 'SB', opponentPositions: [
                        {label: '', life: 4 },
                    ]},
                ]},
                { id: 1, name: 'Facing A Raise', myPositions: [
                    { tId: 0, use: 'HJ', opponentPositions: [
                        {label: 'UTG', life: 5 },
                    ]},
                    { tId: 1, use: 'CO', opponentPositions: [
                        {label: 'UTG', life: 6 },
						{label: 'HJ', life: 7 },
                    ]},
					{ tId: 2, use: 'BTN', opponentPositions: [
                        {label: 'UTG', life: 8 },
						{label: 'HJ', life: 9 },
						{label: 'CO', life: 10 },
                    ]},
					{ tId: 3, use: 'SB', opponentPositions: [
                        {label: 'UTG', life: 11 },
						{label: 'HJ', life: 12 },
						{label: 'CO', life: 13 },
						{label: 'BTN', life: 14 },
                    ]},
					{ tId: 4, use: 'BB', opponentPositions: [
                        {label: 'UTG', life: 15 },
						{label: 'HJ', life: 16 },
						{label: 'CO', life: 17 },
						{label: 'BTN', life: 18 },
						{label: 'SB', life: 19 },
                    ]},
                ]},
				{ id: 2, name: 'Facing A 3bet', myPositions: [
                    { tId: 0, use: 'UTG', opponentPositions: [
                        {label: 'HJ', life: 20 },
						{label: 'CO', life: 21 },
						{label: 'BTN', life: 22 },
						{label: 'SB', life: 23 },
						{label: 'BB', life: 24 },
                    ]},
                    { tId: 1, use: 'HJ', opponentPositions: [
                        {label: 'CO', life: 25 },
						{label: 'BTN', life: 26 },
						{label: 'SB', life: 27 },
						{label: 'BB', life: 28 },
                    ]},
					{ tId: 2, use: 'CO', opponentPositions: [
                        {label: 'BTN', life: 29 },
						{label: 'SB', life: 30 },
						{label: 'BB', life: 31 },
                    ]},
					{ tId: 3, use: 'BTN', opponentPositions: [
                        {label: 'SB', life: 32 },
						{label: 'BB', life: 33 },
                    ]},
					{ tId: 4, use: 'SB', opponentPositions: [
                        {label: 'BB', life: 34 },
                    ]},
                ]},
            ],
        }
    },
    computed: {
        getMyPositions: function() {
          // 選択中の情報を取得
               let situationName = this.situation; // 1つ目のselect

        // situations から選択中のnameを探す
        const situationResult = this.situations.find((v) => v.name === situationName);

        // 2つ目のselectの初期値をセットする
        this.my_position = this.situations[situationResult.id].myPositions[0].use;

        // 2つ目のselectのoptionをセットする
        return this.situations[situationResult.id].myPositions;
      },
      getOpponentPositions: function() {
        // 選択中の情報を取得
        let situationName = this.situation; // 1つ目のselect
        let myPositionName = this.my_position; // 2つ目のselect

        // situations から選択中のuseを探す
        const situationResult = this.situations.find((v) => v.name === situationName);
        const myPositionResult = this.situations[situationResult.id].myPositions.find((v) => v.use === myPositionName);

        // ３つ目のselectの初期値をセットする
        console.log(this.situations[situationResult.id].myPositions[myPositionResult.tId].opponentPositions[0].label);
        this.opponent_position = this.situations[situationResult.id].myPositions[myPositionResult.tId].opponentPositions[0].label;

        // 3つ目のselectのoptionをセットする
        return this.situations[situationResult.id].myPositions[myPositionResult.tId].opponentPositions;

      }
    },
}
</script>