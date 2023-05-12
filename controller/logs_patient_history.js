class Logs_patient_history{

  constructor(){
    this.id = ''
    this.actionn = ''
    this.new_files_id = ''
    this.new_diagnosis = ''
    this.new_treatment = ''
    this.new_notes = ''
    this.new_created_at = ''
    this.new_updated_at = ''
    this.logs_cdate = ''
    this.logs_ctime = ''
    this.log_ByUser = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/logs_patient_history.php?id=' + this.id + '&actionn=' + this.actionn + '&new_files_id=' + this.new_files_id + '&new_diagnosis=' + this.new_diagnosis + '&new_treatment=' + this.new_treatment + '&new_notes=' + this.new_notes + '&new_created_at=' + this.new_created_at + '&new_updated_at=' + this.new_updated_at + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/logs_patient_history.php?id=' + this.id + '&actionn=' + this.actionn + '&new_files_id=' + this.new_files_id + '&new_diagnosis=' + this.new_diagnosis + '&new_treatment=' + this.new_treatment + '&new_notes=' + this.new_notes + '&new_created_at=' + this.new_created_at + '&new_updated_at=' + this.new_updated_at + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/logs_patient_history.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/logs_patient_history.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/logs_patient_history.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/logs_patient_history.php?getById=' + this.id)); }catch(err){}}
  async getByActionn(){ try{ eval(await this.request('controller/logs_patient_history.php?getByActionn=' + this.actionn)); }catch(err){}}
  async getByNew_files_id(){ try{ eval(await this.request('controller/logs_patient_history.php?getByNew_files_id=' + this.new_files_id)); }catch(err){}}
  async getByNew_diagnosis(){ try{ eval(await this.request('controller/logs_patient_history.php?getByNew_diagnosis=' + this.new_diagnosis)); }catch(err){}}
  async getByNew_treatment(){ try{ eval(await this.request('controller/logs_patient_history.php?getByNew_treatment=' + this.new_treatment)); }catch(err){}}
  async getByNew_notes(){ try{ eval(await this.request('controller/logs_patient_history.php?getByNew_notes=' + this.new_notes)); }catch(err){}}
  async getByNew_created_at(){ try{ eval(await this.request('controller/logs_patient_history.php?getByNew_created_at=' + this.new_created_at)); }catch(err){}}
  async getByNew_updated_at(){ try{ eval(await this.request('controller/logs_patient_history.php?getByNew_updated_at=' + this.new_updated_at)); }catch(err){}}
  async getByLogs_cdate(){ try{ eval(await this.request('controller/logs_patient_history.php?getByLogs_cdate=' + this.logs_cdate)); }catch(err){}}
  async getByLogs_ctime(){ try{ eval(await this.request('controller/logs_patient_history.php?getByLogs_ctime=' + this.logs_ctime)); }catch(err){}}
  async getByLog_ByUser(){ try{ eval(await this.request('controller/logs_patient_history.php?getByLog_ByUser=' + this.log_ByUser)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/logs_patient_history.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/logs_patient_history.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/logs_patient_history.php?id=' + this.id + '&actionn=' + this.actionn + '&new_files_id=' + this.new_files_id + '&new_diagnosis=' + this.new_diagnosis + '&new_treatment=' + this.new_treatment + '&new_notes=' + this.new_notes + '&new_created_at=' + this.new_created_at + '&new_updated_at=' + this.new_updated_at + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/logs_patient_history.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/logs_patient_history.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/logs_patient_history.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setActionn(actionn){ this.actionn = actionn; }
  setNew_files_id(new_files_id){ this.new_files_id = new_files_id; }
  setNew_diagnosis(new_diagnosis){ this.new_diagnosis = new_diagnosis; }
  setNew_treatment(new_treatment){ this.new_treatment = new_treatment; }
  setNew_notes(new_notes){ this.new_notes = new_notes; }
  setNew_created_at(new_created_at){ this.new_created_at = new_created_at; }
  setNew_updated_at(new_updated_at){ this.new_updated_at = new_updated_at; }
  setLogs_cdate(logs_cdate){ this.logs_cdate = logs_cdate; }
  setLogs_ctime(logs_ctime){ this.logs_ctime = logs_ctime; }
  setLog_ByUser(log_ByUser){ this.log_ByUser = log_ByUser; }
  setTimee(timee){ this.timee = timee; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getActionn(){ return this.actionn; }
  getNew_files_id(){ return this.new_files_id; }
  getNew_diagnosis(){ return this.new_diagnosis; }
  getNew_treatment(){ return this.new_treatment; }
  getNew_notes(){ return this.new_notes; }
  getNew_created_at(){ return this.new_created_at; }
  getNew_updated_at(){ return this.new_updated_at; }
  getLogs_cdate(){ return this.logs_cdate; }
  getLogs_ctime(){ return this.logs_ctime; }
  getLog_ByUser(){ return this.log_ByUser; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/logs_patient_history.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
