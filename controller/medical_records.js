class Medical_records{

  constructor(){
    this.id = ''
    this.doctor_id = ''
    this.patient_id = ''
    this.record_date = ''
    this.medical_condition = ''
    this.height = ''
    this.weight = ''
    this.blood_pressure = ''
    this.blood_sugar = ''
    this.treatment = ''
    this.description = ''
    this.diagnosis_date = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/medical_records.php?id=' + this.id + '&doctor_id=' + this.doctor_id + '&patient_id=' + this.patient_id + '&record_date=' + this.record_date + '&medical_condition=' + this.medical_condition + '&height=' + this.height + '&weight=' + this.weight + '&blood_pressure=' + this.blood_pressure + '&blood_sugar=' + this.blood_sugar + '&treatment=' + this.treatment + '&description=' + this.description + '&diagnosis_date=' + this.diagnosis_date + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/medical_records.php?id=' + this.id + '&doctor_id=' + this.doctor_id + '&patient_id=' + this.patient_id + '&record_date=' + this.record_date + '&medical_condition=' + this.medical_condition + '&height=' + this.height + '&weight=' + this.weight + '&blood_pressure=' + this.blood_pressure + '&blood_sugar=' + this.blood_sugar + '&treatment=' + this.treatment + '&description=' + this.description + '&diagnosis_date=' + this.diagnosis_date + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/medical_records.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/medical_records.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/medical_records.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/medical_records.php?getById=' + this.id)); }catch(err){}}
  async getByDoctor_id(){ try{ eval(await this.request('controller/medical_records.php?getByDoctor_id=' + this.doctor_id)); }catch(err){}}
  async getByPatient_id(){ try{ eval(await this.request('controller/medical_records.php?getByPatient_id=' + this.patient_id)); }catch(err){}}
  async getByRecord_date(){ try{ eval(await this.request('controller/medical_records.php?getByRecord_date=' + this.record_date)); }catch(err){}}
  async getByMedical_condition(){ try{ eval(await this.request('controller/medical_records.php?getByMedical_condition=' + this.medical_condition)); }catch(err){}}
  async getByHeight(){ try{ eval(await this.request('controller/medical_records.php?getByHeight=' + this.height)); }catch(err){}}
  async getByWeight(){ try{ eval(await this.request('controller/medical_records.php?getByWeight=' + this.weight)); }catch(err){}}
  async getByBlood_pressure(){ try{ eval(await this.request('controller/medical_records.php?getByBlood_pressure=' + this.blood_pressure)); }catch(err){}}
  async getByBlood_sugar(){ try{ eval(await this.request('controller/medical_records.php?getByBlood_sugar=' + this.blood_sugar)); }catch(err){}}
  async getByTreatment(){ try{ eval(await this.request('controller/medical_records.php?getByTreatment=' + this.treatment)); }catch(err){}}
  async getByDescription(){ try{ eval(await this.request('controller/medical_records.php?getByDescription=' + this.description)); }catch(err){}}
  async getByDiagnosis_date(){ try{ eval(await this.request('controller/medical_records.php?getByDiagnosis_date=' + this.diagnosis_date)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/medical_records.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/medical_records.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/medical_records.php?id=' + this.id + '&doctor_id=' + this.doctor_id + '&patient_id=' + this.patient_id + '&record_date=' + this.record_date + '&medical_condition=' + this.medical_condition + '&height=' + this.height + '&weight=' + this.weight + '&blood_pressure=' + this.blood_pressure + '&blood_sugar=' + this.blood_sugar + '&treatment=' + this.treatment + '&description=' + this.description + '&diagnosis_date=' + this.diagnosis_date + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/medical_records.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/medical_records.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/medical_records.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setDoctor_id(doctor_id){ this.doctor_id = doctor_id; }
  setPatient_id(patient_id){ this.patient_id = patient_id; }
  setRecord_date(record_date){ this.record_date = record_date; }
  setMedical_condition(medical_condition){ this.medical_condition = medical_condition; }
  setHeight(height){ this.height = height; }
  setWeight(weight){ this.weight = weight; }
  setBlood_pressure(blood_pressure){ this.blood_pressure = blood_pressure; }
  setBlood_sugar(blood_sugar){ this.blood_sugar = blood_sugar; }
  setTreatment(treatment){ this.treatment = treatment; }
  setDescription(description){ this.description = description; }
  setDiagnosis_date(diagnosis_date){ this.diagnosis_date = diagnosis_date; }
  setTimee(timee){ this.timee = timee; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getDoctor_id(){ return this.doctor_id; }
  getPatient_id(){ return this.patient_id; }
  getRecord_date(){ return this.record_date; }
  getMedical_condition(){ return this.medical_condition; }
  getHeight(){ return this.height; }
  getWeight(){ return this.weight; }
  getBlood_pressure(){ return this.blood_pressure; }
  getBlood_sugar(){ return this.blood_sugar; }
  getTreatment(){ return this.treatment; }
  getDescription(){ return this.description; }
  getDiagnosis_date(){ return this.diagnosis_date; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/medical_records.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
