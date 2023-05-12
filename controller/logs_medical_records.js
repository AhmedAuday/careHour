class Logs_medical_records{

  constructor(){
    this.id = ''
    this.actionn = ''
    this.new_doctor_id = ''
    this.new_patient_id = ''
    this.new_record_date = ''
    this.new_medical_condition = ''
    this.new_height = ''
    this.new_weight = ''
    this.new_blood_pressure = ''
    this.new_blood_sugar = ''
    this.new_treatment = ''
    this.new_description = ''
    this.new_diagnosis_date = ''
    this.logs_cdate = ''
    this.logs_ctime = ''
    this.log_ByUser = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/logs_medical_records.php?id=' + this.id + '&actionn=' + this.actionn + '&new_doctor_id=' + this.new_doctor_id + '&new_patient_id=' + this.new_patient_id + '&new_record_date=' + this.new_record_date + '&new_medical_condition=' + this.new_medical_condition + '&new_height=' + this.new_height + '&new_weight=' + this.new_weight + '&new_blood_pressure=' + this.new_blood_pressure + '&new_blood_sugar=' + this.new_blood_sugar + '&new_treatment=' + this.new_treatment + '&new_description=' + this.new_description + '&new_diagnosis_date=' + this.new_diagnosis_date + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/logs_medical_records.php?id=' + this.id + '&actionn=' + this.actionn + '&new_doctor_id=' + this.new_doctor_id + '&new_patient_id=' + this.new_patient_id + '&new_record_date=' + this.new_record_date + '&new_medical_condition=' + this.new_medical_condition + '&new_height=' + this.new_height + '&new_weight=' + this.new_weight + '&new_blood_pressure=' + this.new_blood_pressure + '&new_blood_sugar=' + this.new_blood_sugar + '&new_treatment=' + this.new_treatment + '&new_description=' + this.new_description + '&new_diagnosis_date=' + this.new_diagnosis_date + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/logs_medical_records.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/logs_medical_records.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/logs_medical_records.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/logs_medical_records.php?getById=' + this.id)); }catch(err){}}
  async getByActionn(){ try{ eval(await this.request('controller/logs_medical_records.php?getByActionn=' + this.actionn)); }catch(err){}}
  async getByNew_doctor_id(){ try{ eval(await this.request('controller/logs_medical_records.php?getByNew_doctor_id=' + this.new_doctor_id)); }catch(err){}}
  async getByNew_patient_id(){ try{ eval(await this.request('controller/logs_medical_records.php?getByNew_patient_id=' + this.new_patient_id)); }catch(err){}}
  async getByNew_record_date(){ try{ eval(await this.request('controller/logs_medical_records.php?getByNew_record_date=' + this.new_record_date)); }catch(err){}}
  async getByNew_medical_condition(){ try{ eval(await this.request('controller/logs_medical_records.php?getByNew_medical_condition=' + this.new_medical_condition)); }catch(err){}}
  async getByNew_height(){ try{ eval(await this.request('controller/logs_medical_records.php?getByNew_height=' + this.new_height)); }catch(err){}}
  async getByNew_weight(){ try{ eval(await this.request('controller/logs_medical_records.php?getByNew_weight=' + this.new_weight)); }catch(err){}}
  async getByNew_blood_pressure(){ try{ eval(await this.request('controller/logs_medical_records.php?getByNew_blood_pressure=' + this.new_blood_pressure)); }catch(err){}}
  async getByNew_blood_sugar(){ try{ eval(await this.request('controller/logs_medical_records.php?getByNew_blood_sugar=' + this.new_blood_sugar)); }catch(err){}}
  async getByNew_treatment(){ try{ eval(await this.request('controller/logs_medical_records.php?getByNew_treatment=' + this.new_treatment)); }catch(err){}}
  async getByNew_description(){ try{ eval(await this.request('controller/logs_medical_records.php?getByNew_description=' + this.new_description)); }catch(err){}}
  async getByNew_diagnosis_date(){ try{ eval(await this.request('controller/logs_medical_records.php?getByNew_diagnosis_date=' + this.new_diagnosis_date)); }catch(err){}}
  async getByLogs_cdate(){ try{ eval(await this.request('controller/logs_medical_records.php?getByLogs_cdate=' + this.logs_cdate)); }catch(err){}}
  async getByLogs_ctime(){ try{ eval(await this.request('controller/logs_medical_records.php?getByLogs_ctime=' + this.logs_ctime)); }catch(err){}}
  async getByLog_ByUser(){ try{ eval(await this.request('controller/logs_medical_records.php?getByLog_ByUser=' + this.log_ByUser)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/logs_medical_records.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/logs_medical_records.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/logs_medical_records.php?id=' + this.id + '&actionn=' + this.actionn + '&new_doctor_id=' + this.new_doctor_id + '&new_patient_id=' + this.new_patient_id + '&new_record_date=' + this.new_record_date + '&new_medical_condition=' + this.new_medical_condition + '&new_height=' + this.new_height + '&new_weight=' + this.new_weight + '&new_blood_pressure=' + this.new_blood_pressure + '&new_blood_sugar=' + this.new_blood_sugar + '&new_treatment=' + this.new_treatment + '&new_description=' + this.new_description + '&new_diagnosis_date=' + this.new_diagnosis_date + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/logs_medical_records.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/logs_medical_records.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/logs_medical_records.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setActionn(actionn){ this.actionn = actionn; }
  setNew_doctor_id(new_doctor_id){ this.new_doctor_id = new_doctor_id; }
  setNew_patient_id(new_patient_id){ this.new_patient_id = new_patient_id; }
  setNew_record_date(new_record_date){ this.new_record_date = new_record_date; }
  setNew_medical_condition(new_medical_condition){ this.new_medical_condition = new_medical_condition; }
  setNew_height(new_height){ this.new_height = new_height; }
  setNew_weight(new_weight){ this.new_weight = new_weight; }
  setNew_blood_pressure(new_blood_pressure){ this.new_blood_pressure = new_blood_pressure; }
  setNew_blood_sugar(new_blood_sugar){ this.new_blood_sugar = new_blood_sugar; }
  setNew_treatment(new_treatment){ this.new_treatment = new_treatment; }
  setNew_description(new_description){ this.new_description = new_description; }
  setNew_diagnosis_date(new_diagnosis_date){ this.new_diagnosis_date = new_diagnosis_date; }
  setLogs_cdate(logs_cdate){ this.logs_cdate = logs_cdate; }
  setLogs_ctime(logs_ctime){ this.logs_ctime = logs_ctime; }
  setLog_ByUser(log_ByUser){ this.log_ByUser = log_ByUser; }
  setTimee(timee){ this.timee = timee; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getActionn(){ return this.actionn; }
  getNew_doctor_id(){ return this.new_doctor_id; }
  getNew_patient_id(){ return this.new_patient_id; }
  getNew_record_date(){ return this.new_record_date; }
  getNew_medical_condition(){ return this.new_medical_condition; }
  getNew_height(){ return this.new_height; }
  getNew_weight(){ return this.new_weight; }
  getNew_blood_pressure(){ return this.new_blood_pressure; }
  getNew_blood_sugar(){ return this.new_blood_sugar; }
  getNew_treatment(){ return this.new_treatment; }
  getNew_description(){ return this.new_description; }
  getNew_diagnosis_date(){ return this.new_diagnosis_date; }
  getLogs_cdate(){ return this.logs_cdate; }
  getLogs_ctime(){ return this.logs_ctime; }
  getLog_ByUser(){ return this.log_ByUser; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/logs_medical_records.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
