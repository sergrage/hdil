import $ from 'jquery';

class Tooltip {
	constructor(){
		this.tooltip = $('[data-toggle="tooltip"]');
	}

	events(){
		this.tooltip.tooltip();
	}
}

export default Tooltip;