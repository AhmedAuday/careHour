class Logs_prescriptions{

  constructor(){
    this.id = ''
    this.actionn = ''
    this.new_patient_id = ''
    this.new_doctor_id = ''
    this.new_medication_id = ''
    this.new_prescription_date = ''
    this.new_dosage = ''
    this.logs_cdate = ''
    this.logs_ctime = ''
    this.log_ByUser = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/logs_prescriptions.php?id=' + this.id + '&actionn=' + this.actionn + '&new_patient_id=' + this.new_patient_id + '&new_doctor_id=' + this.new_doctor_id + '&new_medication_id=' + this.new_medication_id + '&new_prescription_date=' + this.new_prescription_date + '&new_dosage=' + this.new_dosage + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/logs_prescriptions.php?id=' + this.id + '&actionn=' + this.actionn + '&new_patient_id=' + this.new_patient_id + '&new_doctor_id=' + this.new_doctor_id + '&new_medication_id=' + this.new_medication_id + '&new_prescription_date=' + this.new_prescription_date + '&new_dosage=' + this.new_dosage + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/logs_prescriptions.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/logs_prescriptions.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/logs_prescriptions.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/logs_prescriptions.php?getById=' + this.id)); }catch(err){}}
  async getByActionn(){ try{ eval(await this.request('controller/logs_prescriptions.php?getByActionn=' + this.actionn)); }catch(err){}}
  async getByNew_patient_id(){ try{ eval(await this.request('controller/logs_prescriptions.php?getByNew_patient_id=' + this.new_patient_id)); }catch(err){}}
  async getByNew_doctor_id(){ try{ eval(await this.request('controller/logs_prescriptions.php?getByNew_doctor_id=' + this.new_doctor_id)); }catch(err){}}
  async getByNew_medication_id(){ try{ eval(await this.request('controller/logs_prescriptions.php?getByNew_medication_id=' + this.new_medication_id)); }catch(err){}}
  async getByNew_prescription_date(){ try{ eval(await this.request('controller/logs_prescriptions.php?getByNew_prescription_date=' + this.new_prescription_date)); }catch(err){}}
  async getByNew_dosage(){ try{ eval(await this.request('controller/logs_prescriptions.php?getByNew_dosage=' + this.new_dosage)); }catch(err){}}
  async getByLogs_cdate(){ try{ eval(await this.request('controller/logs_prescriptions.php?getByLogs_cdate=' + this.logs_cdate)); }catch(err){}}
  async getByLogs_ctime(){ try{ eval(await this.request('controller/logs_prescriptions.php?getByLogs_ctime=' + this.logs_ctime)); }catch(err){}}
  async getByLog_ByUser(){ try{ eval(await this.request('controller/logs_prescriptions.php?getByLog_ByUser=' + this.log_ByUser)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/logs_prescriptions.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/logs_prescriptions.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/logs_prescriptions.php?id=' + this.id + '&actionn=' + this.actionn + '&new_patient_id=' + this.new_patient_id + '&new_doctor_id=' + this.new_doctor_id + '&new_medication_id=' + this.new_medication_id + '&new_prescription_date=' + this.new_prescription_date + '&new_dosage=' + this.new_dosage + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/logs_prescriptions.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/logs_prescriptions.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/logs_prescriptions.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setActionn(actionn){ this.actionn = actionn; }
  setNew_patient_id(new_patient_id){ this.new_patient_id = new_patient_id; }
  setNew_doctor_id(new_doctor_id){ this.new_doctor_id = new_doctor_id; }
  setNew_medication_id(new_medication_id){ this.new_medication_id = new_medication_id; }
  setNew_prescription_date(new_prescription_date){ this.new_prescription_date = new_prescription_date; }
  setNew_dosage(new_dosage){ this.new_dosage = new_dosage; }
  setLogs_cdate(logs_cdate){ this.logs_cdate = logs_cdate; }
  setLogs_ctime(logs_ctime){ this.logs_ctime = logs_ctime; }
  setLog_ByUser(log_ByUser){ this.log_ByUser = log_ByUser; }
  setTimee(timee){ this.timee = timee; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getActionn(){ return this.actionn; }
  getNew_patient_id(){ return this.new_patient_id; }
  getNew_doctor_id(){ return this.new_doctor_id; }
  getNew_medication_id(){ return this.new_medication_id; }
  getNew_prescription_date(){ return this.new_prescription_date; }
  getNew_dosage(){ return this.new_dosage; }
  getLogs_cdate(){ return this.logs_cdate; }
  getLogs_ctime(){ return this.logs_ctime; }
  getLog_ByUser(){ return this.log_ByUser; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/logs_prescriptions.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
