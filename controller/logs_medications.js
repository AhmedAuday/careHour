class Logs_medications{

  constructor(){
    this.id = ''
    this.actionn = ''
    this.new_doctor_id = ''
    this.new_patient_id = ''
    this.new_medication_name = ''
    this.new_dosage = ''
    this.new_frequency = ''
    this.new_start_date = ''
    this.new_end_date = ''
    this.logs_cdate = ''
    this.logs_ctime = ''
    this.log_ByUser = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/logs_medications.php?id=' + this.id + '&actionn=' + this.actionn + '&new_doctor_id=' + this.new_doctor_id + '&new_patient_id=' + this.new_patient_id + '&new_medication_name=' + this.new_medication_name + '&new_dosage=' + this.new_dosage + '&new_frequency=' + this.new_frequency + '&new_start_date=' + this.new_start_date + '&new_end_date=' + this.new_end_date + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/logs_medications.php?id=' + this.id + '&actionn=' + this.actionn + '&new_doctor_id=' + this.new_doctor_id + '&new_patient_id=' + this.new_patient_id + '&new_medication_name=' + this.new_medication_name + '&new_dosage=' + this.new_dosage + '&new_frequency=' + this.new_frequency + '&new_start_date=' + this.new_start_date + '&new_end_date=' + this.new_end_date + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/logs_medications.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/logs_medications.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/logs_medications.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/logs_medications.php?getById=' + this.id)); }catch(err){}}
  async getByActionn(){ try{ eval(await this.request('controller/logs_medications.php?getByActionn=' + this.actionn)); }catch(err){}}
  async getByNew_doctor_id(){ try{ eval(await this.request('controller/logs_medications.php?getByNew_doctor_id=' + this.new_doctor_id)); }catch(err){}}
  async getByNew_patient_id(){ try{ eval(await this.request('controller/logs_medications.php?getByNew_patient_id=' + this.new_patient_id)); }catch(err){}}
  async getByNew_medication_name(){ try{ eval(await this.request('controller/logs_medications.php?getByNew_medication_name=' + this.new_medication_name)); }catch(err){}}
  async getByNew_dosage(){ try{ eval(await this.request('controller/logs_medications.php?getByNew_dosage=' + this.new_dosage)); }catch(err){}}
  async getByNew_frequency(){ try{ eval(await this.request('controller/logs_medications.php?getByNew_frequency=' + this.new_frequency)); }catch(err){}}
  async getByNew_start_date(){ try{ eval(await this.request('controller/logs_medications.php?getByNew_start_date=' + this.new_start_date)); }catch(err){}}
  async getByNew_end_date(){ try{ eval(await this.request('controller/logs_medications.php?getByNew_end_date=' + this.new_end_date)); }catch(err){}}
  async getByLogs_cdate(){ try{ eval(await this.request('controller/logs_medications.php?getByLogs_cdate=' + this.logs_cdate)); }catch(err){}}
  async getByLogs_ctime(){ try{ eval(await this.request('controller/logs_medications.php?getByLogs_ctime=' + this.logs_ctime)); }catch(err){}}
  async getByLog_ByUser(){ try{ eval(await this.request('controller/logs_medications.php?getByLog_ByUser=' + this.log_ByUser)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/logs_medications.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/logs_medications.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/logs_medications.php?id=' + this.id + '&actionn=' + this.actionn + '&new_doctor_id=' + this.new_doctor_id + '&new_patient_id=' + this.new_patient_id + '&new_medication_name=' + this.new_medication_name + '&new_dosage=' + this.new_dosage + '&new_frequency=' + this.new_frequency + '&new_start_date=' + this.new_start_date + '&new_end_date=' + this.new_end_date + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/logs_medications.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/logs_medications.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/logs_medications.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setActionn(actionn){ this.actionn = actionn; }
  setNew_doctor_id(new_doctor_id){ this.new_doctor_id = new_doctor_id; }
  setNew_patient_id(new_patient_id){ this.new_patient_id = new_patient_id; }
  setNew_medication_name(new_medication_name){ this.new_medication_name = new_medication_name; }
  setNew_dosage(new_dosage){ this.new_dosage = new_dosage; }
  setNew_frequency(new_frequency){ this.new_frequency = new_frequency; }
  setNew_start_date(new_start_date){ this.new_start_date = new_start_date; }
  setNew_end_date(new_end_date){ this.new_end_date = new_end_date; }
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
  getNew_medication_name(){ return this.new_medication_name; }
  getNew_dosage(){ return this.new_dosage; }
  getNew_frequency(){ return this.new_frequency; }
  getNew_start_date(){ return this.new_start_date; }
  getNew_end_date(){ return this.new_end_date; }
  getLogs_cdate(){ return this.logs_cdate; }
  getLogs_ctime(){ return this.logs_ctime; }
  getLog_ByUser(){ return this.log_ByUser; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/logs_medications.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
