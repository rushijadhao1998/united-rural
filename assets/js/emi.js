function answer() {
  // Get input values
  var veh_amt = parseFloat(document.getElementById("amt").value);
  var down_amt = parseFloat(document.getElementById("d_pay").value);
  var months = parseInt(document.getElementById("time").value);

  // Fixed Interest Rate
  const annualRate = 16; // 16% per annum

  // Validate inputs
  if (isNaN(veh_amt) || veh_amt <= 0) {
    alert("Please enter a valid Vehicle Amount.");
    return;
  }
  if (isNaN(down_amt) || down_amt < 0 || down_amt >= veh_amt) {
    alert("Please enter a valid Down Payment.");
    return;
  }
  if (isNaN(months) || months <= 0) {
    alert("Please enter a valid Loan Duration (in months).");
    return;
  }

  // Constants
  const processingRate = 0.045; // 4.5% processing fee
  const extraCharges = 470 + 250 + 200 + 50 + 100; // Other charges

  // Loan calculation
  var basePrincipal = veh_amt - down_amt;
  var processing = basePrincipal * processingRate;
  var principal = basePrincipal + extraCharges + processing;

  // Show principal
  document.getElementById("ln_amt").value = principal.toFixed(2);

  // EMI Calculation
  var monthlyRate = annualRate / 12 / 100;

  var emi = (principal * monthlyRate * Math.pow(1 + monthlyRate, months)) / 
            (Math.pow(1 + monthlyRate, months) - 1);

  var totalPayment = emi * months;
  var totalInterest = totalPayment - principal;

  // Display results
  document.getElementById("emi").value = `₹ ${emi.toFixed(2)}`;
  document.getElementById("int_pay").value = `₹ ${totalInterest.toFixed(2)}`;
  document.getElementById("pi_pay").value = `₹ ${totalPayment.toFixed(2)}`;
}