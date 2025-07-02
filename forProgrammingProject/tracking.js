document.getElementById('healthSurveyForm').addEventListener('submit', function(event) {
  event.preventDefault();

  var pet = document.getElementById('pet').value;
  var symptoms = document.getElementById('symptoms').value;
  //var symptoms = document.getElementById('symptoms').value;

  var medicine = recommendMedicine(pet, symptoms);
  document.getElementById('result').innerHTML = 'Possible Disease: ' + medicine;
});

function recommendMedicine(pet, symptoms) {
  // You can implement your own logic here to recommend medicine based on the survey inputs
  // This is just a placeholder example
  var medicine = '';

  if (pet == 'dog' && symptoms == "Lack of energy/lethargic") {
    medicine = 'Canine Parvovirus \nCanine parvovirus is a highly contagious virus that can affect all dogs, but unvaccinated dogs and puppies younger than four months old are the most at risk. Dogs that are ill from canine parvovirus infection are often said to have "parvo." The virus affects dogs gastrointestinal tracts and is spread by direct dog-to-dog contact and contact with contaminated feces (stool), environments, or people. \nRecommend medicine: \n•Get antiemetics to stop vomiting \n•Feed it foods focusing  nutrient, preferably feed it using feeding tube. \n•Get your dog in your trusted vet clinic for more treatment. ';
  }
  if (pet == 'dog' && symptoms == "Have a fever") {
    medicine = 'Canine Parvovirus \nCanine parvovirus is a highly contagious virus that can affect all dogs, but unvaccinated dogs and puppies younger than four months old are the most at risk. Dogs that are ill from canine parvovirus infection are often said to have "parvo." The virus affects dogs gastrointestinal tracts and is spread by direct dog-to-dog contact and contact with contaminated feces (stool), environments, or people. \nRecommend medicine: \n•Get antiemetics to stop vomiting \n•Feed it foods focusing  nutrient, preferably feed it using feeding tube. \n•Get your dog in your trusted vet clinic for more treatment. ';
  }
  if (pet == 'dog' && symptoms == "Shivering") {
    medicine = 'hypothermia describes the situation where a dog’s body temperature is significantly lower than normal. The drop in body temperature must be dramatic enough to put the dog’s well-being at risk, however. Being cold isn’t the same as being hypothermic. \nRecommend Medicine: \n•Do not get your dog expose in cold temperature.\n•Get your dog into a warm place \n•Wrap them in blanket, towel, coats, etc. \n•Place bottles of warm water next to you dog. \n•Get your dog in your trusted vet clinic. ';

  }


  return medicine;
}
