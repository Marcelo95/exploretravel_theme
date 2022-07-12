var Utils = {

	Masks: function() {

		jQuery('.data').unmask().mask('00/00/0000');
		jQuery('.cep').unmask().mask('00000-000');
		jQuery('.cnpj').unmask().mask('00.000.000/0000-00');
		jQuery('.cpf').unmask().mask('000.000.000-00');
		jQuery('.decimal').unmask().mask('#.##0,00', {reverse: true});
		jQuery('.moedaComVirgula').unmask().mask('#.##0,00', {reverse: true});
		jQuery('.moeda').unmask().mask('###0.00', {reverse: true});
		jQuery('.pontos').unmask().mask('000.000.000.000.000.00');
		// jQuery('.inteiro').text( jQuery(this).text().replace('.00',''));


		var SPMaskBehavior = function (val) {
			return val.replace(/\D/g, '').length === 9 ? '(00) 00000-0000' : '(00) 0000-00009';
		},
		spOptions = {
			onKeyPress: function(val, e, field, options) {
				field.mask(SPMaskBehavior.apply({}, arguments), options);
			}
		};
		jQuery('.tel').unmask().mask(SPMaskBehavior, spOptions);
	},



}

