class Logs_medical_procedures{

  constructor(){
    this.id = ''
    this.actionn = ''
    this.new_patient_id = ''
    this.new_doctor_id = ''
    this.new_procedure_date = ''
    this.new_procedure_type = ''
    this.new_procedure_notes = ''
    this.logs_cdate = ''
    this.logs_ctime = ''
    this.log_ByUser = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/logs_medical_procedures.php?id=' + this.id + '&actionn=' + this.actionn + '&new_patient_id=' + this.new_patient_id + '&new_doctor_id=' + this.new_doctor_id + '&new_procedure_date=' + this.new_procedure_date + '&new_procedure_type=' + this.new_procedure_type + '&new_procedure_notes=' + this.new_procedure_notes + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/logs_medical_procedures.php?id=' + this.id + '&actionn=' + this.actionn + '&new_patient_id=' + this.new_patient_id + '&new_doctor_id=' + this.new_doctor_id + '&new_procedure_date=' + this.new_procedure_date + '&new_procedure_type=' + this.new_procedure_type + '&new_procedure_notes=' + this.new_procedure_notes + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/logs_medical_procedures.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/logs_medical_procedures.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/logs_medical_procedures.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/logs_medical_procedures.php?getById=' + this.id)); }catch(err){}}
  async getByActionn(){ try{ eval(await this.request('controller/logs_medical_procedures.php?getByActionn=' + this.actionn)); }catch(err){}}
  async getByNew_patient_id(){ try{ eval(await this.request('controller/logs_medical_procedures.php?getByNew_patient_id=' + this.new_patient_id)); }catch(err){}}
  async getByNew_doctor_id(){ try{ eval(await this.request('controller/logs_medical_procedures.php?getByNew_doctor_id=' + this.new_doctor_id)); }catch(err){}}
  async getByNew_procedure_date(){ try{ eval(await this.request('controller/logs_medical_procedures.php?getByNew_procedure_date=' + this.new_procedure_date)); }catch(err){}}
  async getByNew_procedure_type(){ try{ eval(await this.request('controller/logs_medical_procedures.php?getByNew_procedure_type=' + this.new_procedure_type)); }catch(err){}}
  async getByNew_procedure_notes(){ try{ eval(await this.request('controller/logs_medical_procedures.php?getByNew_procedure_notes=' + this.new_procedure_notes)); }catch(err){}}
  async getByLogs_cdate(){ try{ eval(await this.request('controller/logs_medical_procedures.php?getByLogs_cdate=' + this.logs_cdate)); }catch(err){}}
  async getByLogs_ctime(){ try{ eval(await this.request('controller/logs_medical_procedures.php?getByLogs_ctime=' + this.logs_ctime)); }catch(err){}}
  async getByLog_ByUser(){ try{ eval(await this.request('controller/logs_medical_procedures.php?getByLog_ByUser=' + this.log_ByUser)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/logs_medical_procedures.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/logs_medical_procedures.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/logs_medical_procedures.php?id=' + this.id + '&actionn=' + this.actionn + '&new_patient_id=' + this.new_patient_id + '&new_doctor_id=' + this.new_doctor_id + '&new_procedure_date=' + this.new_procedure_date + '&new_procedure_type=' + this.new_procedure_type + '&new_procedure_notes=' + this.new_procedure_notes + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/logs_medical_procedures.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/logs_medical_procedures.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/logs_medical_procedures.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setActionn(actionn){ this.actionn = actionn; }
  setNew_patient_id(new_patient_id){ this.new_patient_id = new_patient_id; }
  setNew_doctor_id(new_doctor_id){ this.new_doctor_id = new_doctor_id; }
  setNew_procedure_date(new_procedure_date){ this.new_procedure_date = new_procedure_date; }
  setNew_procedure_type(new_procedure_type){ this.new_procedure_type = new_procedure_type; }
  setNew_procedure_notes(new_procedure_notes){ this.new_procedure_notes = new_procedure_notes; }
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
  getNew_procedure_date(){ return this.new_procedure_date; }
  getNew_procedure_type(){ return this.new_procedure_type; }
  getNew_procedure_notes(){ return this.new_procedure_notes; }
  getLogs_cdate(){ return this.logs_cdate; }
  getLogs_ctime(){ return this.logs_ctime; }
  getLog_ByUser(){ return this.log_ByUser; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/logs_medical_procedures.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
